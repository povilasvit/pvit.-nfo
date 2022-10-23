<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProdController extends Controller
{
       public function category($id){


       $products = Category::where('id', $id)->first()->products()->paginate(50);
       $categories = Category::all();

            return view('products.category', compact('products', 'categories'));


    }

        public function shopcategory($id){


       $products = Category::where('id', $id)->first()->products()->paginate(16);
       $categories = Category::all();

            return view('shop_categories', compact('products', 'categories'));
     

    }
}