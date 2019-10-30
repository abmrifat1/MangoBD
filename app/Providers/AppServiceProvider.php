<?php

namespace App\Providers;
use App\BlogCategory;
use App\ContactInfo;
use App\Product;
use App\User;
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
        View::composer('admin.blog_post.create',function ($view){
            $view->with('blogPostCategories',BlogCategory::orderby('postCategoryName','asc')->get());
        });
        View::composer('admin.blog_post.create',function ($view){
            $view->with('users',User::orderby('name','asc')->get());
        });
        View::composer('admin.product.create',function ($view){
            $view->with('categories',Category::orderby('name','asc')->get());
        });
        View::composer('front.includes.footer',function ($view){
            $view->with('categories',Category::orderby('name','asc')->latest()->take(5)->get());
        });
        View::composer('admin.product.create',function ($view){
            $view->with('users',User::orderby('name','asc')->get());
        });
        View::composer('admin.includes.sidebar',function ($view){
            $view->with('messageContacts',ContactInfo::orderby('id','desc')->get());
        });
        View::composer('admin.includes.sidebar',function ($view){
            $view->with('$messageCountss',ContactInfo::count());
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
