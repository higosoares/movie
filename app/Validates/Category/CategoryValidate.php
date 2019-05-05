<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:51
 */

namespace App\Validates\Category;
use App\Traits\LancadorDeExcecao;

class CategoryValidate
{
    use LancadorDeExcecao;

    public static function rules()
    {
        return [
            'tx_name_category' => 'required|string|max:255'
        ];
    }

    public static function messages()
    {
        return [
            'tx_name_category.required' => 'Favor informar o nome da categoria',
            'tx_name_category.max' => 'Tamanho de nome da categoria inválido',
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

    public function validateCategory($category)
    {
        if (!$category) {
            $this->excecao(['category' => ['found' => 'Category not found']]);
        }
    }
}
