<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 21:22
 */

$arClasses = ['vendor/Marcosgrimm/Debug'];

foreach($arClasses as $class_name){

    spl_autoload_register(function ($class_name) {
var_dump($class_name);
        die;
        include $class_name . '.php';
    });
}

