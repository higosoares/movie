<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 10/10/2018
 * Time: 20:53
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\Console\Input\Input;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return \App\Validates\User\UserValidate::rule();
    }

    public function messages()
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
}