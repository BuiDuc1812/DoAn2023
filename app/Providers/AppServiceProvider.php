<?php

namespace App\Providers;


use App\Helper\Cart;
use App\Models\Blog_cate;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFour();
        view()->composer('*', function($view){
           
            $view ->with([
                'category' => Category::where('status',1)->get(),
                'cart' => new Cart,
                
            ]);

        });
    }
}
