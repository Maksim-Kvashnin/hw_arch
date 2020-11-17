<?php


interface IPayment
{
    public function payment(string $order,float $sum, int $phone): bool;
}