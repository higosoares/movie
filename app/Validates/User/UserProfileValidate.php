<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:50
 */

namespace App\Validates\User;
use App\Traits\LancadorDeExcecao;

class UserProfileValidate
{
    use LancadorDeExcecao;

    public static function rules()
    {
        return [
            'id_user' => 'required|int|in:1,11',
            'id_profile' => 'required|int|in:1,11'
        ];
    }

    public static function messages()
    {
        return [
            'id_user.required' => 'Favor informar o usuário',
            'id_profile.required' => 'Favor informar o perfil',
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

    public function validateUserProfile($userProfile)
    {
        if (!$userProfile) {
            $this->excecao(['id' => ['found' => 'User Profile not found']]);
        }
    }
}
