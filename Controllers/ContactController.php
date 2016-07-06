<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:10
 */

namespace Contacts\Controllers;

require_once 'base/ControllerBase.php';
use Contacts\base\ControllerBase;

require_once 'Services/ContactService.php';
use Contacts\Services\ContactService;

class ContactController extends ControllerBase
{
    private $service = 'ContactService';

    public function showAddress ($id){
        $service = new ContactService;
        return json_encode($service->showAddress($id));
    }

    public function showName ($id){
        $service = new ContactService;
        return json_encode($service->showName($id));
    }
}

