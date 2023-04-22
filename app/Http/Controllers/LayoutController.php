<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Blog_cate;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\review;


class LayoutController extends Controller
{
    public function home()
    {
       $product = Product::where('category_id',2)->limit(8)->get();
       $products = Product::where('category_id',3)->get();
       $pro = Product::where('category_id',1)->limit(8)->get();
       $banner = Banner::all();
        return view('layout.home',compact('product','products','pro','banner'));
    }
    public function about()
    {
        return view('layout.about');
    }
    public function contact()
    {
        return view('layout.contact');
    }
    public function news()
    {
        return view('layout.news');
    }
    public function detail($id)
    {

        $review = review::where('product_id',$id)->get();
        $pro = Product::find($id);
        $product = Product::where('category_id',$pro->category_id)->get();
        $ramdomProducts = Product::inRandomOrder()->limit(6)->get();
        return view('layout.detail',compact('pro','product','review','ramdomProducts'));
    }
    public function category($slug)
    {
        $category = Category::where('slug',$slug)->first();
        $product = Product::where('category_id',$category->id)->get();
        $ramdomProducts = Product::inRandomOrder()->limit(6)->get();
        return view('layout.category', compact('product','ramdomProducts'));
    }
    
}
