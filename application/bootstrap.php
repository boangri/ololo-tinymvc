<?php

require __DIR__ . '/../vendor/autoload.php';

function my_autoload($classname)
{
    $path = str_replace("\\", DIRECTORY_SEPARATOR, $classname);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $path . ".php";
}

spl_autoload_register('my_autoload');

core\Route::start(); // запускаем маршрутизатор
