<?php

namespace App\Providers;

use App\Models\Cart;
use App\Models\Favorite;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $cart = Cart::where('user_id', auth()->id())->get();
            $favorite = Favorite::where('user_id', auth()->id())->get();
            $view->with(compact('cart', 'favorite'));
        });
        Paginator::useBootstrap();
    }
}
