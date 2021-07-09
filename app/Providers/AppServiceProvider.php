<?php

namespace App\Providers;

use App\Services\Address;
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
        // $this->app->bind(GiaoHangNhanhGateway::class, GiaoHangNhanh::class);
        $this->app->bind('Address', function($app) {
            return new Address;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
