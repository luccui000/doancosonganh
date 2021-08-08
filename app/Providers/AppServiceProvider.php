<?php

namespace App\Providers;

use App\Services\Address;
use App\Services\GiaoHangNhanh;
use Illuminate\Support\ServiceProvider;  
use App\Gateway\GiaoHang\GiaoHangNhanhGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    { 
        $this->app->bind(GiaoHangNhanhGateway::class, function($app) {
            $token = config('services.giaohangnhanh.token');
            $shopId = config('services.giaohangnhanh.shop_id');
            $fromDistrictId = config('services.giaohangnhanh.from_district_id');

            $headers = [
                'Content-Type' => 'application/json',
                'token' => $token,
                'ShopId' => $shopId
            ]; 
            return new GiaoHangNhanh($token, $headers, $shopId, $fromDistrictId, 1); // Duong bo
        });
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
