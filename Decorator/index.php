<?php

require_once 'INotification.php';
require_once 'NullNotification.php';
require_once 'SmsNotification.php';
require_once 'EmailNotification.php';
require_once 'FacebookNotification.php';

$notification = new FacebookNotification(new EmailNotification(new SmsNotification(new NullNotification())));
$notification->send();
