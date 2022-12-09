<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart as CartList;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\OrderItem;
use Inertia\Inertia;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request){
//         dd('iii');
       $body = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'note' => 'nullable',
            'address' => 'required',
            'town' => 'required',
        ]);
        // dd($body);
        $reference = uniqid();
        $amount = str_replace(',', '', CartList::instance('shopping')->subtotal() );
        $order = Order::create($body);
        foreach (CartList::instance('shopping')->content() as $item ){
            // dd($item);
            $order->addOrderItem($item);
        }
        $data = [
            "first_name" => $request->first_name,
            'email' => $request->email,
            // 'email'=> "ben@gmail.com",
            'orderID' => $order->id,
            'amount' => floatval($amount) * 100,
            // 'amount'=> 10000,
            'currency' => 'NGN',
            'reference' => $reference
        ];
        // dd(floatval($amount));
        try{
            Payment::create([
                'order_id' => $order->id,
                'reference' => $reference
            ]);
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            // dd('iiiii');
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }  
    }

    public function callback(Request $request){
        $paymentDetails = Paystack::getPaymentData();
        $payment = Payment::where('reference', $request->reference)->first();
        $order = Order::where('id', $payment->order_id)->first();
        $items = OrderItem::where('order_id',  $order_id)->get();
        if($paymentDetails['status']== true && $paymentDetails['data']['status']=='success'){
            foreach ($items as $key => $item) {
                $product = Product::where('id', $item->id)->first();
                $product->stock = $product->stock - $item->qty;
                $product->update();
            }
            $payment->update([
                // 'details'=> $paymentDetails['data'],
                'successful' => $paymentDetails['status']
            ]);
            $order->update([
                'status' => 'completed'
            ]);
            CartList::instance('shopping')->destroy();
            return Redirect::back()->withMessage(['msg'=>'Payment Verify successful', 'type'=>'success']);


        }else{
            $order->update([
                'status' => 'failed'
            ]);
            return Redirect::back()->withMessage(['msg'=>'Payment failed', 'type'=>'error']);

        }
    }

    public function index(Request $request){
        $order = Order::with('order_item.product')
        ->when($request->has('filter'), function($query) use ($request){
            $query->where('status', $request->filter);
        })
        ->get();
        return Inertia::render('Order/Index', [
            'orders' => $order,
        ]);  
    }
    public function show($id){
        $order = Order::with('order_item.product')->where('id', $id)->first();
        // dd($order->order_item);
        $order->total = $order->order_item->sum( function($item){
            return $item->price * $item->qty;
        });

        // dd($order->total);
        return Inertia::render('Order/Details', [
            'order' => $order,
            // 'filter' => $request->filter
        ]);  
    }
    public function payment(){
        $payments = Payment::with('order')->get();
        return Inertia::render('Payment', [
            'payments' => $payments,
        ]);  
    }

    public function mark_coomplete($id){
        $order = Order::where('id', $id)->first();
        $order->update([
            'status' => 'completed'
        ]);
        return redirect()->back();
    }

}
