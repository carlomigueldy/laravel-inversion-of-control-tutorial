<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentInterface;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $paymentService;
    
    public function __construct(PaymentInterface $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function index()
    {
        return response()->json([
            'data' => $this->paymentService->pay(250.0),
            'header' => request()->header('X-Payment-Provider')
        ]);
    }
}
