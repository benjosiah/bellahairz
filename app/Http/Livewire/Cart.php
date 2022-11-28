<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart as CartList;

class Cart extends Component
{

    public function increament($rowId){
        // dd($rowId);
        $item = CartList::instance('shopping')->get($rowId);
        $qty= $item->qty + 1;
        CartList::instance('shopping')->update($rowId, $qty);



    }

    public function decreament($rowId){
        $item = CartList::instance('shopping')->get($rowId);
        if($item->qty > 1){
            $qty= $item->qty - 1;
            CartList::instance('shopping')->update($rowId, $qty);
        }

    }

    public function remove($rowId){
        CartList::instance('shopping')->remove($rowId);
    }
    public function render()
    {

        return view('livewire.cart',[
            'cart'=> CartList::instance('shopping')->content(),
            'total'=> CartList::instance('shopping')->subtotal()
        ]
    
    );
    }
}
