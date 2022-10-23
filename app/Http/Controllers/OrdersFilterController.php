<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersFilterController extends Controller
{
        public function date_asc(){

            // $orders = Order::all()->orderBy('created_at', 'asc')->get();
            // $order = $orders->unique('order_number');    
            // dd($orders);
        // return view('orders.index', compact('order')); 
            return 'hi';
    }

        public function date_desc(){

        //     $orders = Order::all()->orderBy('created_at', 'dsc')->get();
        //     $order = $orders->unique('order_number');    
        //     dd($orders);
        // return view('orders.index', compact('order')); 
  return 'hi';
    }
}
