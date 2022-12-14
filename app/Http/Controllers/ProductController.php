<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product as Product;
use App\Models\Category;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Intervention\Image\ImageManagerStatic as Image;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        // return $products;
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
        $image_name = $this->uploadfile($image);
      

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
        $categories = Category::all();
        return Inertia::render('Products/Details', [
            'product' => $product,
            'categories' => $categories
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

        return redirect()->back()->with([
            'message' => "Product updated successfully"
        ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function uploadfile($file){
      
        // $filename = $image->getClientOriginalName();

        $image_resize = Image::make($file->getRealPath());              
        $image_resize->resize(640, 480);
        // $src_path = file_get_contents($file);
        // dd($$file);
        // // Create an image resource for the source image
        // $src_img = imagecreatefromjpeg($src_path);

        // // Create a 200x200 pixel image resource to hold the resized image
        // $dst_img = imagecreatetruecolor(200, 200);

        // // Resize the source image and copy it to the destination image
        // imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, 200, 200, imagesx($src_img), imagesy($src_img));
        // dd($image_resize->basePath());
        cloudinary()->admin();
        $path = Cloudinary::upload($image_resize->basePath())->getSecurePath();
        // dd($path);
        return $path;
    }

    public function updateImage(Request $request, $id)
    {
        // dd('ii');
        $request->validate([
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $image_name = $this->uploadfile($image);
        // dd($image_name);

        $product = Product::find($id);
        $product->image = $image_name;
        $product->save();

        return redirect()->back();
    }
}
