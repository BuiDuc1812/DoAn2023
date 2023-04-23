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
use App\Http\Controllers\BannerController;
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
Route::get('/', [LayoutController::class, 'home'])->name('home');
Route::post('/', [LayoutController::class, 'home'])->name('home');
Route::get('about',[LayoutController::class, 'about'])->name('about');
Route::get('contact',[LayoutController::class, 'contact'])->name('contact');
Route::get('detail/{id}',[LayoutController::class,'detail'])->name('detail');
Route::get('/product/{slug}',[LayoutController::class,'category'])->name('category');
Route::get('news',[LayoutController::class,'news'])->name('news');

// đăng nhập customer
Route::post('/register',[UserController::class,'registerCustomer'])->name('customer.register');
Route::post('/login',[LoginController::class,'loginCustomer'])->name('customer.login');
Route::get('/logout',[LoginController::class,'logoutCustomer'])->name('customer.logout');
Route::get('/account',[UserController::class,'account'])->name('customer.account');
Route::get('/order',[OrderController::class,'showorder'])->name('customer.order');
Route::get('/order/details/{id}',[OrderController::class,'showorderdetails'])->name('customer.orderdetails');
Route::get('/order/details/delete/{orderId}/{productId}',[OrderController::class,'destroydetails'])->name('customer.orderdelete');
Route::post('/account/{id}',[UserController::class,'updateaccount'])->name('update.account');
Route::post('/login/checkout',[LoginController::class,'loginCheckout'])->name('checkout.login');
Route::get('/logout/checkout',[LoginController::class,'logoutCheckout'])->name('checkout.logout');
Route::get('/fogot',[LoginController::class,'forgotpassword'])->name('forgot.pass');
Route::post('/fogot/resetpasword',[LoginController::class,'resetpassword'])->name('reset.pass');

// đăng nhập admin
Route::get('/admin',[LoginController::class,'index'])->name('login');
Route::post('/admin',[LoginController::class,'store'])->name('login.store');

 Route::middleware(['auth'])->group(function(){
 
  Route::get('/admin/home',[AdminController::class,'index'])->name('admin.home');
  Route::resource('admin/home/category', CategoryController::class);
  Route::resource('admin/home/product', ProductController::class);
  Route::get('admin/home/product/review/{id}',[ProductController::class,'showreview'])->name('review');
  Route::post('admin/home/product/review/{id}',[ProductController::class,'deletereview'])->name('deletereview');
  Route::post('detail/{id}',[ProductController::class,'review'])->name('product.review');
  Route::post('admin/home/banner/create',[BannerController::class,'create'])->name('banner.create');
  Route::get('admin/home/banner/index',[BannerController::class,'index'])->name('banner.index');
  Route::get('admin/home/banner/index/{id}',[BannerController::class,'delete'])->name('banner.destroy');
  Route::resource('admin/home/order', Ordercontroller::class);
  Route::get('/print_pdf/{id}', [Ordercontroller::class, 'print_pdf']);
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