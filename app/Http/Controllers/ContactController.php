<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:10
 */

namespace App\Http\Controllers;

use App\Core\ControllerBase;
use App\Services\ContactService;

class ContactController extends ControllerBase
{
    private $service = 'ContactService';

    public function showAddress ($id){
        $service = new ContactService();
        return json_encode($service->showAddress($id));
    }

    public function showName ($id){
        $service = new ContactService;
        return json_encode($service->showName($id));
    }
}

