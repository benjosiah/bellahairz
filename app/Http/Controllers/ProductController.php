<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product as Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return Inertia::render('Products/Index', [
            'products' => $products,
            'categories' => $categories
        ]);


    }

    public function create()
    {
        $categories = Category::all();
        return Inertia::render('Products/Create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ]);
            
        $image = $request->file('image');
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('images'), $image_name);

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;
        $product->image = $image_name;
        $product->save();

        return redirect()->route('products.index');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return Inertia::render('Products/Show', [
            'product' => $product
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return Inertia::render('Products/Edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'stock' => 'required',
        ]);


        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->stock = $request->stock;
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
