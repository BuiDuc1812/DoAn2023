<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    public function index()
    {
        $banner = banner::all();
        return view('admin.banner.index',compact('banner'));
    }

    public function create(Request $request){
        $banner = new banner;
        $image=$request->file;
        $imgname=time().'.'.$image->getClientOriginalName();
        $request->file->move(public_path('uploads'),$imgname);
        $banner->image_banner=$imgname;
        $banner->save();
        return redirect()->back();
    }

    public function delete($id){
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back();
    }
}
