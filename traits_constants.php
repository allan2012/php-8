<?php

trait Billable
{
    public const PROCESSING_FEE = 200.00; // constants can be used in traits (PHP ^8.2)

    public function fetchComputedBill(float $amount) : float
    {
        $vatRate = 0.25;
        return ($vatRate * $amount) + $amount + self::PROCESSING_FEE;
    }
}

class ProcessBill
{
    use Billable;

    public function getBill(float $amount): float
    {
        return $this->fetchComputedBill($amount);
    }
}

$obj = new ProcessBill();
var_dump($obj->getBill(6000.00));
