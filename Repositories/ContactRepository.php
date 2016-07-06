<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:11
 */

namespace Contacts\Repositories;



require_once 'Entities/Contact.php';
use \Contacts\Entities\Contact;

class ContactRepository
{


    public function __construct()
    {
        $this->entity = 'Contact';
    }

    function findAll()
    {
        $file = fopen('storage/contacts.csv', 'r');

        while (($line = fgetcsv($file)) !== FALSE) {
            $contact = new Contact;
            $contact->setName($line[0]);
            $contact->setPhone($line[1]);
            $contact->setStreet($line[2]);
            $contacts[] = $contact;

        }

        fclose($file);
        return $contacts;
    }
}