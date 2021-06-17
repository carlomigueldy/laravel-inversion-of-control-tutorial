<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class PaypalService implements PaymentInterface
{
	public function pay(float $amount)
	{
		return "From PaypalService $amount";
	}
}
