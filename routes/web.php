<?php

use App\Models\Category;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\DiscountsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\ChargeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrdersFilterController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>'web'], function(){

    Route::get('/', [FrontController::class, 'index'])->name('frontHome');
    Route::get('/allProducts', [FrontController::class, 'allProducts'])->name('allProducts');
    Route::get('/webcategory/{id}', [FrontController::class, 'webcategory'])->name('webcategory');
    Route::get('/singleprod/{product}', [FrontController::class, 'single_product'])->name('singleProduct');
    Route::get('/cart', [ShoppingController::class, 'cart'])->name('cart');
    Route::post('/cart', [ShoppingController::class, 'addToCart'])->name('cartAdd');
    Route::get('/cartdelete/{id}', [ShoppingController::class, 'deleteFromCart'])->name('cartDelete');
    Route::get('/cartIncr/{id}/{qty}', [ShoppingController::class, 'cartIncr'])->name('cartIncr');
    Route::get('/cartDsc/{id}/{qty}', [ShoppingController::class, 'cartDsc'])->name('cartDsc');
    Route::get('/checkout', [ShoppingController::class, 'checkout'])->name('checkout');
    Route::post('/charge', [ShoppingController::class, 'charge'])->name('charge');
    Route::get('/shipping', [FrontController::class, 'shipping'])->name('shipping');
    Route::get('/return-and-replacement', [FrontController::class, 'return_and_replacement'])->name('return_and_replacement');
    Route::get('/privacy-policy', [FrontController::class, 'privacy'])->name('privacy');

    Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
});

Route::group(['middleware'=>'auth'], function(){

    Route::get('/admin', [Dashboardcontroller::class, 'index'])->name('admin');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/delivery', DeliveryController::class);
    Route::resource('/products', ProductsController::class);
    Route::get('/cat-products/{id}', [ProdController::class, 'category'])->name('products.category');
    Route::resource('/discounts', DiscountsController::class);
    Route::resource('/orders', OrdersController::class);
    Route::get('/orders/date_asc', [OrdersFilterController::class, 'date_asc'])->name('date_asc');
    Route::get('/orders/date_desc', [OrdersFilterController::class, 'date_desc'])->name('date_desc');
    Route::resource('/other', OthersController::class);

});

//for $categories to be in 'layout.front'
View::composer(['layouts.front'], function($view){
    $categories = Category::all();
    $view->with('categories', $categories);
});















require __DIR__.'/auth.php';



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
