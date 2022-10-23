<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Discount;
use App\Models\Order;
// use App\Models\ShoppingCart;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [

        'category_id',
        'discount_id',
        'name',
        'inStock',
        'price',
        'discount',
        'lastPrice',
        'description',
        'content',
        'path',
        'path2',
        'path3',
        'slug'

    ];

    public function category() {

         return $this->belongsTo(Category::class);

    }
    public function discount() {

         return $this->belongsTo(Discount::class);

    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
            
}
