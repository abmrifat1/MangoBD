<?php

namespace App\Providers;
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
        View::composer('front.singlePage.single',function ($view){
            $view->with('categories',Category::orderby('name','asc')->get());
        });
        View::composer('front.payment.payment',function ($view){
            $view->with('categories',Category::orderby('name','asc')->get());
        });
        View::composer('admin.product.create',function ($view){
            $view->with('categories',Category::orderby('name','asc')->get());
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
