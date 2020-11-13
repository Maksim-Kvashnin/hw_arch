<?php


class EmailNotification implements INotification
{
    protected $notification;

    public function __construct(INotification $notification)
    {
        $this->notification = $notification;
    }

    public function send(): void
    {
        echo "Отправка уведомления по Email" . PHP_EOL;
        $this->notification->send();
    }
}