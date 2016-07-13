<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 12/07/2016
 * Time: 22:23
 */

namespace App\Interfaces;


use App\Entities\Contact;

interface ContactRepositoryInterface
{
    public function find($id);
    public function save(Contact $contact);
    public function remove(Contact $contact);
}