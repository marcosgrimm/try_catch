<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:11
 */

namespace App\Repositories;

use \App\Entities\Contact;
use App\Core\RepositoryBase;

class ContactRepository extends RepositoryBase
{

    protected $entity = 'Contact';


    public function __construct()
    {

    }

    function findAll()
    {
        $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -2)) . '/';
        $file = fopen($_SERVER['DOCUMENT_ROOT'].$basepath.'storage/contacts.csv', 'r');
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