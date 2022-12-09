<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'first_name',
        'last_name',
        'email',
        'phone',
        'note',
        'address',
        'town',
        'status'
    ];

    public function order_item(){
        return $this->hasMany(OrderItem::class);
    }
 
    public function products(){
        return $this->hasMany(Product::class, 'order_items');
    }

    public function addOrderItem($data){
        return $this->order_item()->create([
            'order_id' => $this->id,
            'product_id' => $data->id,
            'price' => $data->price,
            'qty'=> $data->qty
        ]);
    }
}
