<?php

namespace App\Providers;

use App\Interfaces\PaymentInterface;
use App\Services\PaypalService;
use App\Services\SquarePayService;
use App\Services\StripeService;
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
        // $this->app->bind(PaymentInterface::class, PaypalService::class);
        // $this->app->bind(PaymentInterface::class, StripeService::class);
        $this->app->bind(PaymentInterface::class, SquarePayService::class);
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
