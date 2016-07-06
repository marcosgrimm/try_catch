<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:24
 */

namespace Contacts\base;


class RepositoryBase
{
    private $entity;

    /**
     * ContactRepository constructor.
     * @param $entity
     */
    public function __construct($entity){

        $this->entity = $entity;
    }
}