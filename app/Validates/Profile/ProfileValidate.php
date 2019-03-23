<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:50
 */

namespace App\Validates\Profile;
use App\Traits\LancadorDeExcecao;

class ProfileValidate
{
    use LancadorDeExcecao;

    public static function rules()
    {
        return [
            'tx_name_profile' => 'required|string|max:255'
        ];
    }

    public static function messages()
    {
        return [
            'tx_name_profile.required' => 'Favor informar o nome do perfil',
            'tx_name_profile.max' => 'Tamanho de nome do perfil inválido',
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

    /**
     * Valida integer
     *
     * @param [type] $id
     * @return void
     */
    public function validateInteger($id)
    {
        if (!is_int($id)) {
            $this->excecao(['id' => ['invalid' => 'Id invalid']]);
        }
    }

    /**
     * Validate profile
     *
     * @param [type] $profile
     * @return void
     */
    public function validateProfile($profile)
    {
        if (!$profile) {
            $this->excecao(['id' => ['found' => 'Profile not found']]);
        }
    }
}
