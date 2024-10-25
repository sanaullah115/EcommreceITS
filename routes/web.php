<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StripePaymentController;
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
Route::get('/admin',[AdminController::class,'index']);
Route::get('/product',[AdminController::class,'product']);
Route::post('/AddnewProduct',[AdminController::class,'AddnewProduct']);
Route::post('/UpdateProduct/{id}',[AdminController::class,'UpdateProduct']);
Route::get('/deleteprodct/{id}',[AdminController::class,'deleteprodct']);





Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/cart',[MainController::class,'cart'])->name('cart');
Route::post('/checkout',[MainController::class,'checkout'])->name('checkout');
Route::get('/shop',[MainController::class,'shop'])->name('shop');
Route::get('/single/{id}',[MainController::class,'singleproduct'])->name('single');
Route::post('/addtocart',[MainController::class,'addtocart'])->name('addtocart');
Route::get('/delete/{id}',[MainController::class,'deleteCartitem'])->name('delete');
Route::post('/updateCart/{id}',[MainController::class,'updateCart'])->name('updateCart');







Route::get('/Login',[MainController::class,'Login'])->name('Login');
Route::post('/LoginUser',[MainController::class,'LoginUser'])->name('LoginUser');
Route::get('/register',[MainController::class,'register'])->name('register');
Route::post('/save',[MainController::class,'registersave'])->name('save');



Route::get('/Logout',[MainController::class,'Logout'])->name('Logout');


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
