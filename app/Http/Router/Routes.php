<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:09
 */
namespace App\Http\Router;

use App\Http\Controllers\ContactController;

class Routes {

    public function __construct()
    {

        $base_url = $this->getCurrentUri();
        $routes = array();
        $routes = explode('/', $base_url);

        if($routes[0] == "Contact") {
            $controller = new ContactController();

            if (isset($routes[1]) && is_numeric($routes[1])){
                $contactId = $routes[1];
            }

            if (isset($routes[2]) && $routes[2] == 'Address'){
                echo $controller->showAddress($contactId);
            }

            if (isset($routes[2]) && $routes[2] == 'Name'){
                echo $controller->showName($contactId);
            }
        }
    }

    private function getCurrentUri()
    {
//d(array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1));
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -2)) . '/';

        $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
        if (strstr($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }
        $uri =  trim($uri, '/');
      //  dd($uri);
        return $uri;
    }






}
