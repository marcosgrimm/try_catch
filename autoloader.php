<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 21:22
 */

function __autoload($class)
{
    if (substr($class, 0, 3) == 'App') {
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        require_once $file;
    }
}