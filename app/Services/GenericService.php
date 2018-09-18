<?php
namespace App\Services;

use Illuminate\Container\Container;

abstract class GenericService
{
    /**
     *
     * @var Container
     */
    protected $container;
    /**
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container =$container;
    }
}
