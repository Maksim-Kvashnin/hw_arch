<?php


class Order
{
    private float $sum;
    private int $phone;
    private array $products;

    public function __construct(int $id)
    {
        $this->products = $this->getProducts($id);
        $this->sum = $this->getSum($id);
    }

    private function getProducts(int $id) {
        return [['носоки красные', 'большие'], ['носоки синие', 'маленькие']];
    }

    private function getSum(int $id) {
        return 320;
    }

    public function setPhone(int $id, int $phone) {
        $this->phone = $phone;
    }

    private function parseProductToString(array $products) {
        $productsString = '';
        foreach ($products as $product) {
            $productsString .= "Название продукта: {$product[0]}, размер: {$product[1]}".PHP_EOL;
        }
        return $productsString;
    }

    public function paymentOrder(IPayment $payment) {
        echo 'Начинаем оплату'.PHP_EOL;
        $productsString = $this->parseProductToString($this->products);
        if($payment->payment($productsString, $this->sum, $this->phone)) {
            echo 'Оплата успешно совершена. Спасибо за ваш заказ!'.PHP_EOL;
        } else {
            echo 'Что-то пошло не так. Повторите пожалуйста позже.'.PHP_EOL;
        }
    }

}