<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:12
 */

namespace App\Services;

use App\Core\ServiceBase;
use App\Repositories\ContactRepository;

class ContactService extends ServiceBase
{
    private $repository = 'ContactRepository';

    public function showAddress($id){
        $obRepository = new ContactRepository;
        $contacts = $obRepository->findAll();

        foreach($contacts as $contact){
            $addresses[] = $contact->getStreet();
        }
        return $addresses[$id];
    }

    public function showName($id){
        $obRepository = new ContactRepository;
        $contacts = $obRepository->findAll();

        foreach($contacts as $contact){
            $addresses[] = $contact->getName();
        }
        return $addresses[$id];
    }
}