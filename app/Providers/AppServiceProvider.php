<?php

namespace App\Providers;
use App\Product;
use View;
use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('front.includes.header',function ($view){
            $view->with('categories',Category::orderby('name','asc')->get());
        });
        View::composer('admin.product.create',function ($view){
            $view->with('categories',Category::orderby('name','asc')->get());
        });
        View::composer('front.includes.footer',function ($view){
            $view->with('categories',Category::orderby('name','asc')->latest()->take(5)->get());
        });



    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
