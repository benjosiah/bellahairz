<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product as ProductList;
use Illuminate\Http\Request;
// use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Product extends Component
{
    use LivewireAlert;
    public $Sproduct;
    public $count=1;
    public $category = "";
    // public $categories;
    
    
    public function selectProduct($product){
        // dd($product);
        $this->Sproduct = ProductList::where('id', $product['id'])->first();
        $this->dispatchBrowserEvent('show-product');
    }

    public function increament(){

        $this->count = $this->count + 1;
        $this->dispatchBrowserEvent('show-product');
    }

    public function decreament(){
        if($this->count > 1){
            $this->count = $this->count + 1;
            $this->dispatchBrowserEvent('show-product');
        }
        $this->dispatchBrowserEvent('show-product');
    }

    public function addTocart($product){
        // dd($this->Sproduct);
        Cart::instance('shopping')->add($product['id'], $product['name'], 1, $product['price'], [
            'image'=> $product['image']
        ]);
        $this->alert('success', 'Product added to cart');
        $this->dispatchBrowserEvent('refresh');
        // dd(Cart::content());
    }


    public function render(Request $request)
    {
        $category_slug = $request->category??'';

        $category = Category::where('slug', $category_slug)->first()->id;
        if($request->has('category') && $category !== ''){
            $products = ProductList::where('category_id',$category)->paginate(12);
            // return $products;
        }else{
            $products = ProductList::paginate(12);
            // dd($products);
        }
        
        $categories = Category::with('products')->get();
        return view('livewire.product',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
