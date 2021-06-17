<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class SquarePayService implements PaymentInterface
{
	public function pay(float $amount)
	{
		return "From SquarePayService $amount";
	}
}
