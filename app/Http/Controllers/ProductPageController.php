<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products as Product;
use App\Models\Category;

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
}
