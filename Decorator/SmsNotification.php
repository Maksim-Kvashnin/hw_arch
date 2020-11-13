<?php


class SmsNotification implements INotification
{
    protected $notification;

    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }

    public function send(): void
    {
        echo "Отправка уведомления по SMS" . PHP_EOL;
        $this->notification->send();
    }
}