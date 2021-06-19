<?php

use App\Http\Controllers\PaymentProvider\PaypalController;
use App\Http\Controllers\PaymentProvider\SquarePayController;
use App\Http\Controllers\PaymentProvider\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('pay-with-paypal', [PaypalController::class, 'index']);
Route::get('pay-with-stripe', [StripeController::class, 'index']);
Route::get('pay-with-squarepay', [SquarePayController::class, 'index']);
