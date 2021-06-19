<?php

namespace App\Providers;

use App\Http\Controllers\PaymentProvider\PaypalController;
use App\Http\Controllers\PaymentProvider\SquarePayController;
use App\Http\Controllers\PaymentProvider\StripeController;
use App\Interfaces\PaymentInterface;
use App\Services\PaypalService;
use App\Services\SquarePayService;
use App\Services\StripeService;
use Illuminate\Http\Request;
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
        $this->app->when(PaypalController::class)
            ->needs(PaymentInterface::class)
            ->give(PaypalService::class);

        $this->app->when(StripeController::class)
            ->needs(PaymentInterface::class)
            ->give(StripeService::class);

        $this->app->when(SquarePayController::class)
            ->needs(PaymentInterface::class)
            ->give(SquarePayService::class);
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
