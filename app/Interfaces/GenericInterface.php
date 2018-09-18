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
    
    public function cadastrar($params);

    public function editar($id);

    public function excluir($id);

    public function listar();

}