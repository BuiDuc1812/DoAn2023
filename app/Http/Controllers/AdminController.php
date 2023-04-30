<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productcount = Product::All()->count();
        $ordercount = Order::All()->count();
        $usercount = User::All()->count();
        $totalPrice = OrderDetail::sum('subtotal');
        $formattedTotalPrice = number_format($totalPrice, 0, ',', '.') . ' VND';
        return view('admin.home',[
            'title'=> 'Trang chủ Admin'
        ], compact('productcount','ordercount','usercount','formattedTotalPrice'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
