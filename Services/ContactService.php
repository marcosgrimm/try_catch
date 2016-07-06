<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:12
 */

namespace Contacts\Services;


require_once 'base/ServiceBase.php';
use Contacts\base\ServiceBase;

require_once 'Repositories/ContactRepository.php';
use Contacts\Repositories\ContactRepository;

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