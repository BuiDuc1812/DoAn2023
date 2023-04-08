<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\OrderManagerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', function () {
    return view('layout.home');
});
//view fe
Route::get('home', [LayoutController::class, 'home'])->name('home');
Route::post('home', [LayoutController::class, 'home'])->name('home');
Route::get('about',[LayoutController::class, 'about'])->name('about');
Route::get('contact',[LayoutController::class, 'contact'])->name('contact');
Route::get('detail/{id}',[LayoutController::class,'detail'])->name('detail');
Route::get('/product/{slug}',[LayoutController::class,'category'])->name('category');
Route::get('news',[LayoutController::class,'news'])->name('news');

// đăng nhập customer
Route::post('/register',[UserController::class,'registerCustomer'])->name('customer.register');
Route::post('/login',[LoginController::class,'loginCustomer'])->name('customer.login');
Route::get('/logout',[LoginController::class,'logoutCustomer'])->name('customer.logout');
Route::post('/login/checkout',[LoginController::class,'loginCheckout'])->name('checkout.login');
Route::get('/logout/checkout',[LoginController::class,'logoutCheckout'])->name('checkout.logout');

// đăng nhập admin
Route::get('/admin',[LoginController::class,'index'])->name('login');
Route::post('/admin',[LoginController::class,'store'])->name('login.store');

 Route::middleware(['auth'])->group(function(){
 
  Route::get('/admin/home',[AdminController::class,'index'])->name('admin.home');
  Route::resource('admin/home/category', CategoryController::class);
  Route::resource('admin/home/product', ProductController::class);
  Route::resource('admin/home/order', Ordercontroller::class);
  Route::get('admin/home/cart/detail/{id}',[OrderManagerController::class,'show'])->name('order.detail');
  Route::resource('admin/home/user', UserController::class);
});

//CART
Route::group(['prefix' => 'cart'], function() {
  Route::get('', [CartController::class, 'view'])->name('cart.view');
  Route::get('checkout', [CartController::class, 'checkout'])->name('cart.checkout');
  Route::post('checkout', [CartController::class, 'postCheckout']);
  Route::get('add/{product}', [CartController::class, 'add'])->name('cart.add');
  Route::get('remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
  Route::get('update/{id}', [CartController::class, 'update'])->name('cart.update');
  Route::get('clear', [CartController::class, 'clear'])->name('cart.clear');

});