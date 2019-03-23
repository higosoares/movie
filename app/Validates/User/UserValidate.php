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

    public static function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255', //unique:tb_user,email,{$id},id
            'password' => 'nullable|string|min:6|max:255',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'Favor informar o nome do usuário',
            'name.max' => 'Tamanho de nome do usuário inválido',
            'email.required' => 'Favor informar o e-mail do usuário',
            'email.email' => 'Tamanho de e-mail do usuário inválido',
            'email.max' => 'Favor informar o e-mail do usuário válido',
            //'email.unique' => 'E-mail já existente',
            'password.min' => 'Tamanho de e-mail do usuário inválido',
            'password.max' => 'Tamanho de e-mail do usuário inválido',

        ];
    }

    /**
     * Validate params
     * @param \stdClass $params
     * @throws \DomainException
     */
    public function validateParameters($params)
    {
        $validator = \Validator::make((array) $params, self::rules(), self::messages());

        if ($validator->fails())
        {
            $this->excecao($validator->failed());
        }
    }


    public function validateInteger($id)
    {
        if (!is_int($id)) {
            $this->excecao(['id' => ['invalid' => 'Id invalid']]);
        }
    }

    public function validateUser($user)
    {
        if (!$user) {
            $this->excecao(['id' => ['found' => 'User not found']]);
        }
    }
}
