<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 05/07/2016
 * Time: 22:23
 */

namespace App\Core;

abstract class ControllerBase
{
    protected $service;

    function __construct($service)
    {

        $this->service = $service;
    }

    /**
     * @param mixed $service
     * @return ControllerBase
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }
}