<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.home',[
            'title'=> 'Trang chủ Admin'
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
