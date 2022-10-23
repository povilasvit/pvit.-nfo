<?php

namespace App\Http\Controllers;

Use Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Discount;
use App\Models\Other;
use Illuminate\Http\Request;

class FrontController extends Controller
{


    public function index(){

        $categories = Category::all();

        return view('front.index', compact('categories'));
    } 

    public function webcategory($id){
        
       $cartItems = Cart::content();
       $products = Category::where('id', $id)->first()->products()->paginate(50);

       return view('front.products')->with('products', $products)->with('cartItems', $cartItems);

    } 

    public function allProducts(){

        $cartItems = Cart::content();
        $products = Product::all();
        return view('front.products')->with('products', $products)->with('cartItems', $cartItems);
    
    }

    public function single_product(Product $product){
        
        $cartItems = Cart::content();
        return view('front.singleProduct')->withProduct($product)->with('cartItems', $cartItems);

    }

    public function shipping(){
        $others = Other::all();
        return view('front.shipping', compact('others'));
    }

    public function privacy(){
        $others = Other::all();
        return view('front.privasypolicy', compact('others'));
    }

    public function return_and_replacement(){
        $others = Other::all();
        return view('front.return', compact('others'));
    }

}
