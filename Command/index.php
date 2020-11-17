<?php


spl_autoload_register(function ($classname) {
    include_once ($classname.'.php');
});

$user = new User();
$user->runCmd(0, 0, 'paste', 'text');
$user->runCmd(1,2,'cut');
$user->runCmd(1,1,'paste');
$user->down(2);
$user->up(2);
