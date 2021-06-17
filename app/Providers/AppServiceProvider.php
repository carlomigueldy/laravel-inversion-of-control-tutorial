<?php

namespace App\Providers;

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
        if (!$this->app->request->has('X-Payment-Provider')) {
            return $this->app->bind(PaymentInterface::class, StripeService::class);
        }

        switch ($this->app->request->header('X-Payment-Provider')) {
            case 'STRIPE':
                return $this->app->bind(PaymentInterface::class, StripeService::class);

            case 'PAYPAL':
                return $this->app->bind(PaymentInterface::class, PaypalService::class);

            case 'SQUAREPAY':
                return $this->app->bind(PaymentInterface::class, SquarePayService::class);

            default:
                return $this->app->bind(PaymentInterface::class, StripeService::class);
        }
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
