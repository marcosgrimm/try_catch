<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:12
 */

namespace App\Services;

use App\Core\ServiceBase;

class ContactService extends ServiceBase
{

    public function showAddress($id){
        $contacts = $this->getRepository()->findAll();

        foreach($contacts as $contact){
            $addresses[] = $contact->getStreet();
        }
        return $addresses[$id];
    }

    public function showName($id){
        $contacts = $contacts = $this->getRepository()->findAll();

        foreach($contacts as $contact){
            $addresses[] = $contact->getName();
        }
        return $addresses[$id];
    }
}