<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:24
 */

namespace App\Core;


class ServiceBase
{
    private $repository;

    /**
     * ContactService constructor.
     * @param null $repository
     */
    public function __construct($repository = null)
    {
        $this->repository = $repository;
    }
}