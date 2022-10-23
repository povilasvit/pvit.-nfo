<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Delivery;

class Order extends Model
{
    use HasFactory;

        protected $fillable = [

        'order_number',
        'product_id',
        'product_qty',
        'delivery_id',
        'status',
        'name',
        'phone',
        'email',
        'address',
        'address2',
        'note', 
    ];

    public function products(){

        return $this->hasOne(Product::class, 'id', 'product_id');
    
    }
    public function deliveries() {

         return $this->hasOne(Delivery::class, 'id', 'delivery_id');

    }

}
