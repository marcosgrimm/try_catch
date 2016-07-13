<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:24
 */

namespace App\Core;

use App\Interfaces\ContactRepositoryInterface;
abstract class ServiceBase
{
    private $repository;

    /**
     * ContactService constructor.
     * @param null $repository
     */
    public function __construct(ContactRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return ContactRepositoryInterface|null
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param ContactRepositoryInterface|null $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }
}