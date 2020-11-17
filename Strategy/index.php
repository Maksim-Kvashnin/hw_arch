<?php


spl_autoload_register(function ($classname) {
    include_once ($classname.'.php');
});

$order = new Order(1);
$order->setPhone(1, 12345678);
$order->paymentOrder(new KiwiPayment());
