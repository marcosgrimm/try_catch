<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:10
 */

namespace App\Http\Controllers;

use App\Core\ControllerBase;

class ContactController extends ControllerBase
{

    public function showAddress ($id){
        $service =  $this->service;
        return json_encode($service->showAddress($id));
    }

    public function showName ($id){
        $service = $this->service;
        return json_encode($service->showName($id));
    }
}

