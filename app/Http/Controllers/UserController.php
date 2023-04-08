<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\AccountValidateRequest;
use App\Http\Requests\AddAccountValidateRequest;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    private $user;

    public function __construct(
        User $user
    ){
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->getDataIndex();
        return view('admin.user.index',compact('users'),['title'=>'Danh sách tài khoản']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.add',['title'=>'Thêm mới tài khoản']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddAccountValidateRequest $request)
    {
        $this->user->add($request);
        Session::flash('success', 'Thêm mới thành công!');
        return redirect()->route('user.index');
    }

    public function registerCustomer(Request $request) {
        $users = User::Where('email',$request->email)->get();
        if (!$users->all()) {
            $this->user->add($request);
            Session::flash('success', 'Tạo tài khoản và đăng nhập thành công!');
            return redirect()->route('home');
        } else {
            Session::flash('error', 'Email dã tồn tại!');
            return back()->withInput();
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->user->getById($id);
        return view('admin.user.edit',compact('user'),['title'=> 'Chỉnh sửa tài khoản']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AccountValidateRequest $request, $id)
    {
        if ($this->user->add($request, $id)) {
            Session::flash('success', 'Sửa thành công!');
            return redirect()->route('user.index');
        } else {
            Session::flash('error', 'Email mật khẩu không đúng hoặc sai xác nhận mặt khẩu!');
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->user->remove($id);
        return redirect()->back();
    }
}
