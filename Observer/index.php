<?php


spl_autoload_register(function ($classname) {
    include_once ($classname.'.php');
});


$user1 = new User("user1", "mail1", "resume1");
$user2 = new User("user2", "mail2", "resume2");
$user3 = new User("user3", "mail3", "resume3");

$observable = UserObservable::getInstance();

$observable->attach($user1, "PHP");
$observable->attach($user2, "JavaScript");
$observable->attach($user3);

$observable->notify("PHP");
$observable->notify("JavaScript");
$observable->notify();

$observable->detach($user2, "JavaScript");
$observable->notify("JavaScript");

