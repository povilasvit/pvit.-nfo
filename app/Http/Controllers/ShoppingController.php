<?php

namespace App\Http\Controllers;

Use Cart;
use App\Models\Product;
use App\Models\Category;
use App\Models\Delivery;
use App\Models\Order;
// use App\Models\ShoppingCart;
use Session;
use Stripe;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function addToCart(){               
        
        $product = Product::findOrFail(request()->product_id);
        $cartItems = Cart::add([
            'id' => $product->id,
            'name' => $product->name, 
            'qty' => 1, 
            'price' => $product->lastPrice,
            'weight' => 0,
            'options' => ['image' => $product->path, 'inStock' => $product->inStock,]
        ]);


     return redirect()->back();  
}

    public function deleteFromCart($id){
        $categories = Category::all(); 
        Cart::remove($id);

        if(Cart::content()->count() > 0){
            return redirect()->back();
        } else {
            return redirect()->route('frontHome')->with('categories', $categories);
        }

    }

    public function cartIncr($id, $qty){
            Cart::update($id, $qty + 1);
            return redirect()->back();
    }

    public function cartDsc($id, $qty){
        $categories = Category::all();    
        Cart::update($id, $qty - 1);
            if(Cart::content()->count() > 0){
                return redirect()->back();
            } else {
                return redirect()->route('frontHome')->with('categories', $categories);
            }
    }


    public function cart(){

        $delivery = Delivery::all();        

        return view('front.cart', compact('delivery'));

    }

    public function checkout(){
       //  $basketItems = Cart::getcontent(); 
          
       // return view('front.test', compact('basketItems'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function charge(Request $request){ 

        //Create order
        // $cart = Cart::content();
        // $lastOrder = Order::latest()->first();
        //     foreach($cart as $cartItem){
        //        $order = $request->all();
        //        $lastOrder == null ? $order['order_number'] = 1 : $order['order_number'] = $lastOrder->order_number + 1;
               
        //        $orderFromSelect = $request['delivery_id'];
        //        $orderFromSelectArray = str_split($orderFromSelect, 1);
        //        $strToNumber = (int)$orderFromSelectArray[0];
        //        $order['delivery_id'] = $strToNumber;
        //        $order['product_qty'] = $cartItem->qty;
        //        $order['product_id'] = $cartItem->id;
        //        Order::create($order);
        //     }


        //Payment
        // $delivery_id = $order['delivery_id'];
        // $delivery = Delivery::findOrFail($delivery_id); 

            // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // Stripe\Charge::create ([
            // "amount" => Cart::initial() *100 + $delivery->price*100,
            // "currency" => "Eur",
            // "source" => $request->stripeToken,
            // "description" => "Linvity"
            // ]);       

            // Cart::destroy();
            // return redirect('/')->with('success','Mokėjimas Įvykdytas Sėkmingai!');
            
    try {
     // Use Stripe's library to make requests...
        //to find delivery
        $cart = Cart::content();
        foreach($cart as $cartItem){
            $orderFromSelect = $request->input('delivery_id');
            $orderFromSelectArray = str_split($orderFromSelect, 1);
            $delivery_id = (int)$orderFromSelectArray[0];
            $delivery = Delivery::findOrFail($delivery_id);            
        }

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            'amount' => Cart::initial() *100 + $delivery->price*100,
            'currency' => "Eur",
            "source" => $request->stripeToken,
            "description" => "Linvity",
       ]);

        $cart1 = Cart::content();
        $lastOrder = Order::latest()->first();
        foreach($cart1 as $cartItem1){
            $order = $request->all();
            $lastOrder == null ? $order['order_number'] = 1 : $order['order_number'] = $lastOrder->order_number + 1;
            $order['delivery_id'] = $delivery_id;
            $order['product_qty'] = $cartItem->qty;
            $order['product_id'] = $cartItem->id;
            //Minus cart item qty from product qty
            $prod = Product::findOrFail($order['product_id']);
            $prod->inStock = $prod->inStock - $cartItem->qty;
            $prod->save();
            Order::create($order);     
        }

        Cart::destroy();
        return redirect('/')->with('success','Mokėjimas Įvykdytas Sėkmingai!');
        
} catch(\Stripe\Exception\CardException $e) {
          // Since it's a decline, \Stripe\Exception\CardException will be caught
          echo 'Status is:' . $e->getHttpStatus() . '\n';
          echo 'Type is:' . $e->getError()->type . '\n';
          echo 'Code is:' . $e->getError()->code . '\n';
          // param is '' in this case
          echo 'Param is:' . $e->getError()->param . '\n';
          echo 'Message is:' . $e->getError()->message . '\n';
        } catch (\Stripe\Exception\RateLimitException $e) {
          // Too many requests made to the API too quickly
        } catch (\Stripe\Exception\InvalidRequestException $e) {
          // Invalid parameters were supplied to Stripe's API
        } catch (\Stripe\Exception\AuthenticationException $e) {
          // Authentication with Stripe's API failed
          // (maybe you changed API keys recently)
        } catch (\Stripe\Exception\ApiConnectionException $e) {
          // Network communication with Stripe failed
        } catch (\Stripe\Exception\ApiErrorException $e) {
          // Display a very generic error to the user, and maybe send
          // yourself an email
        } catch (Exception $e) {
          // Something else happened, completely unrelated to Stripe
        }

     }
}
