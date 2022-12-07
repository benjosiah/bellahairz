<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Product;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart as CartList;

class ProductPageController extends Controller
{
    public function products(){
        $products = Product::all();
        $category = Category::all();


        return view('products', [
            'products'=> $products,
            'categories' => $category
        ]);
    }

    public function checkout(){
     return view('checkout',[
            'cart'=> CartList::instance('shopping')->content(),
            'total'=> CartList::instance('shopping')->subtotal()
        ]);
    }

    public function home(){
        $products = Product::with('category')->get();
        return view('welcome', [
            'products'=> $products,
        ]);
    }

    public function addTocart(Request $request){
        $product = $request->product;
        CartList::instance('shopping')->add($product['id'], $product['name'], 1, $product['price'], [
            'image'=> $product['image']
        ]);
        return redirect()->back()->with([
            'message' => "Item added to cart"
        ]);
        // dd(CartList::content());
    }
}
