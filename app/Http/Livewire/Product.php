<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\products as ProductList;
// use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

class Product extends Component
{
    public $Sproduct;
    public $count=1;
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
        $this->dispatchBrowserEvent('show-product');
        // dd(Cart::content());
    }

    public function render()
    {
        $products = ProductList::all();
        $categories = Category::all();
        return view('livewire.product',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
