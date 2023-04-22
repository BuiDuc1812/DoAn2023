<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

use function Ramsey\Uuid\v1;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::search()->orderBy('created_at', 'DESC')->paginate(8);
        return view('admin.cart.index',['title'=> 'Danh sách đơn đặt hàng'],compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('admin.cart.edit',compact('order'),['title'=> 'Chỉnh sửa danh mục']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update($request->all());
        return redirect()->route('order.index')->with('success','Đã cập nhật');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $order = Order::find($id)->delete();
        $order_details = OrderDetail::where('order_id',$id)->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        return redirect()->back()->with('success','Xóa thành công');
    }

    public function print_pdf($id){
        $orders = Order::find($id);
        $detail = OrderDetail::where('order_id',$id)->get();
        $pdf=PDF::loadView('admin.cart.pdf',compact('orders','detail'));
        return $pdf->download('order_details.pdf');
    }

    public function showorder(){
        if((Auth::check()) && (Auth::user()->status == 1)){
            $user_id = Auth::user()->id;
        }
        $order = Order::where('user_id', $user_id)->get();
        $ordercount = $order->count();
        return view('layout.order', compact('order','ordercount'));
    }
    public function showorderdetails($id){
        $orders = Order::find($id);
        
        $detail = OrderDetail::where('order_id',$id)->get();
        return view('layout.orderdetails', compact('detail','orders'));
    }

}
