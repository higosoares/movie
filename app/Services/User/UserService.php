<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\User;


use App\Services\GenericService;
use App\Traits\LancadorDeExcecao;

class UserService extends GenericService
{
    use LancadorDeExcecao;


    public function __construct(Container $container)
    {
        parent::__construct($container);

    }

}