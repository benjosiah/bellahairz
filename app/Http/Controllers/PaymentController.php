<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Paystack;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart as CartList;
use App\Models\Order;
use App\Models\Payment;
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
//             Payment::create([
//                 'order_id' => $order->id,
//                 'reference' => $reference
//             ]);
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            dd('iiiii');
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }  
    }

    public function callback(Request $request){
        $paymentDetails = Paystack::getPaymentData();
        $payment = Payment::where('reference', $request->reference)->first();
        $order = Order::where('id', $payment->order_id)->first();
        if($paymentDetails['status']== true && $paymentDetails['data']['status']=='success'){
            $payment->update([
                'details'=> $paymentDetails['data'],
                'successful' => $paymentDetails['status']
            ]);
            $order->update([
                'status' => 'completed'
            ]);
            CartList::instance('shopping')->destroy();
            return Redirect::back()->withMessage(['msg'=>'Payment Verify successful', 'type'=>'success']);


        }else{
//             $payment->update([
//                 'details'=> $paymentDetails['data'],
//             ]);
            $order->update([
                'status' => 'failed'
            ]);
            return Redirect::back()->withMessage(['msg'=>'Payment failed', 'type'=>'error']);

        }
    }

    public function index(){
        $order = Order::with('order_item')->get();
        return Inertia::render('Order/Index', [
            'orders' => $order,
        ]);  
    }
    public function payment(){
        $payments = Payment::with('order')->get();
        return Inertia::render('Payment', [
            'payments' => $payments,
        ]);  
    }

}
