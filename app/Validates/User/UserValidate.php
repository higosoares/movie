<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:50
 */

namespace App\Validates\User;
use App\Traits\LancadorDeExcecao;

class UserValidate
{
    use LancadorDeExcecao;

    public static function rule()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', //unique:tb_user,email,{$id},id
            'password' => 'nullable|string|min:6|max:255',
        ];
    }

    /**
     * Validate params
     * @param \stdClass $params
     * @throws \DomainException
     */
    public function validateParameters($params)
    {
        $validator = \Validator::make((array) $params, self::rule());

        if ($validator->fails())
        {
            $this->excecao($validator->failed());
        }
    }


    public function validateInteger($id)
    {
        if (!is_int($id)) {
            $this->excecao(['id' => ['invalid' => 'User invalid']]);
        }
    }

    public function validateUser($user)
    {
        if (!$user) {
            $this->excecao(['id' => ['found' => 'User not found']]);
        }
    }
}