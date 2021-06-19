<?php

namespace App\Contracts;

interface PaymentInterface
{
  /**
   * @param float $amount 
   * @return mixed 
   */
  public function pay(float $amount): string;
}
