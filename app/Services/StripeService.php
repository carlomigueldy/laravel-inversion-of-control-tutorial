<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class StripeService implements PaymentInterface
{
	public function pay(float $amount)
	{
		return "From StripeService $amount";
	}
}
