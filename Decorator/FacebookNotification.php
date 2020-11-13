<?php


class FacebookNotification implements INotification
{
    protected $notification;

    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }

    public function send(): void
    {
        echo "Отправка уведомления на Facebook" . PHP_EOL;
        $this->notification->send();
    }
}