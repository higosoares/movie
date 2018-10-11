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
            'tx_name_user.required' => 'Favor informar o nome do usuário',
            'tx_name_user.max' => 'Tamanho de nome do usuário inválido',
            'tx_email_user.required' => 'Favor informar o e-mail do usuário',
            'tx_email_user.email' => 'Tamanho de e-mail do usuário inválido',
            'tx_email_user.max' => 'Favor informar o e-mail do usuário válido',
            'tx_email_user.unique' => 'E-mail já existente',
            'tx_password_user.min' => 'Tamanho de e-mail do usuário inválido',
            'tx_password_user.max' => 'Tamanho de e-mail do usuário inválido',

        ];
    }
}