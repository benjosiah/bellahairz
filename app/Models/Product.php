<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function order_item(){
       return $this->belongsTo(OrderItem::class);
    }

    public function order(){
        return $this->belongsTo(Order::class, 'order_items');
    }
}
