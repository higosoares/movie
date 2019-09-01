<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:51
 */

namespace App\Validates\Category;
use App\Enum\CategoryEnum;
use App\Exceptions\MovieException;
use App\Models\Category;
use App\Traits\LancadorDeExcecao;
use Illuminate\Support\Facades\Validator;
use stdClass;

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
     *
     * @param stdClass $params
     * @throws MovieException
     */
    public function validateParameters($params)
    {
        $validator = Validator::make((array) $params, self::rules(), self::messages());

        if ($validator->fails()) {
            $this->excecao('Error', json_encode($validator->failed()));
        }
    }

    /**
     * Validate an integer
     *
     * @param $id
     * @throws MovieException
     */
    public function validateInteger($id)
    {
        if (!is_int($id)) {
            $this->excecao('Error', CategoryEnum::idInvalid);
        }
    }

    /**
     * Validate category
     *
     * @param Category $category
     * @throws MovieException
     */
    public function validateCategory(?Category $category)
    {
        if (!$category) {
            $this->excecao('Error', CategoryEnum::notFound);
        }
    }
}
