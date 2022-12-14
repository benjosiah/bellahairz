<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return Inertia::render('Category/Index', [
            'categories' => $categories
        ]);
    }

    public function create()
    {
        return Inertia::render('Category/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $name = strtolower($request->nmae);
        $slug = str_replace(' ', '-', $name);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return Inertia::render('Category/Show', [
            'category' => $category
        ]);
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return Inertia::render('Category/Edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
}
