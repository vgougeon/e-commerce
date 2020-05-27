<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth; 
use Illuminate\Support\Facades\View;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;

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
        //
        View::composer('*', function($view)
        {
            if (Auth::check()){
                Cart::restore(Auth::user()->id);
            }
        });
        
    }
}
