<?php

/**
 * Created by PhpStorm.
 * User: Fabricio
 * Date: 13/03/2018
 * Time: 20:05
 */
namespace App\Interfaces;


interface GenericInterface
{
    public function register($params);

    public function edit($id, $params);

    public function delete($id);

    public function list();

    public function retrieve($id);
}
