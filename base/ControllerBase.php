<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:23
 */

namespace Contacts\base;


class ControllerBase
{
    private $entity;
    private $repository;
    private $service;

    /**
     * ControllerBase constructor.
     * @param $entity
     * @param $repository
     * @param $service
     */
    public function __construct($entity = null, $repository = null, $service = null)
    {

        $this->entity = $entity;
        $this->repository = $repository;
        $this->service = $service;
    }
}