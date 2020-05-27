<?php

namespace App\Http\Middleware;
use Melihovv\ShoppingCart\Facades\ShoppingCart as Cart;
use Closure;

class CartMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check()){
            Cart::restore(auth()->user()->id);
            return $next($request);
        }
        return $next($request);
    }
}
