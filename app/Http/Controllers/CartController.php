<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class CartController extends Controller

{
    public function view()
    {

        return view ('layout.cart-view');
    }

    public function add(Cart $cart, Product $product)
    {
        $cart->addToCart($product,request()->quantity);

       return redirect()->route('cart.view')->with('success','Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function remove(Cart $cart,$id)
    {
        $cart->removeItem($id);
        return redirect()->route('cart.view')->with('success','Xóa sản phẩn thành công thành công');
    }

    public function update(Cart $cart,$id)
    {
        $quantity = request('quantity', 1);
        $cart->updateItem($id, $quantity);
        return redirect()->route('cart.view');
 
        return redirect()->route('cart.view')->with('success','Cập nhật đơn hàng thành công');
    }

    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view')->with('success','Xóa giỏ hàng thành công thành công');
    }
    public function checkout()
    {
        return view('layout.checkout');
    }
    public function postCheckout(Request $request, Cart $cart)
    {
        //kiểm tra nếu chưa đăng nhập thì tạo bản ghi mới vào user
        if ((Auth::check()) && (Auth::user()->status == 1)) {
            $user_id = Auth::user()->id;
        } else {
            $object_user = new User();
            $list_users = $object_user->getAll();
            $check = false;
            foreach ( $list_users as  $list_user) {
                if ($list_user->email == $request->email) {
                    $check = true;
                    $user_id = $list_user->id;
                }
            }
            if ($check == false) {
                $user = User::create([
                    'name'=> $request->name,
                    'email'=>$request->email,
                    'password'=>Hash::make('123456'),
                    'status'=> '1'
                ]);
                $user_id = $user->id;
            }
        }
        try {
           $order = Order::create([
                'phone'=>$request->phone,
                'address'=>$request->address,
                "user_id"=>$user_id,
                'note'=>$request->note,
           ]);
                foreach($cart->items as $item) {
                    $detail_data = [
                        'order_id' => $order->id,
                        'product_id' => $item->id,
                        'price' => $item->price,
                        'quantity' => $item->quantity
                    ];
                    OrderDetail::create($detail_data);
                }
    
                session(['cart' => null]);
                return redirect()->route('home')->with('success','Đặt hàng thành công');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
