<?php


class YandexPayment implements IPayment
{
    public function payment(string $order,float $sum, int $phone): bool {
        echo "Оплачиваем заказ".PHP_EOL." {$order}на сумму {$sum} с помощью Yandex, ваш телефон {$phone}".PHP_EOL;
        if (true) {
            return true;
        } else {
            return false;
        }
    }
}