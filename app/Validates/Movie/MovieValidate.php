<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:51
 */

namespace App\Validates\Movie;
use App\Traits\LancadorDeExcecao;


class MovieValidate
{
    use LancadorDeExcecao;

    public static function rules()
    {
        return [
            'tx_name_movie' => 'required|string|max:255',
            'tx_name_director' => 'required|string|max:255',
            'tx_description_movie' => 'required|string|max:255',
            'qt_duration_movie' => '01:37:00',
            'qt_debut_movie' => 'required|date',
            'qt_year_movie' => '2018',
            'tp_situation_movie' => 'required|int|between:0,1|max:1',
            'tx_url_imagem_movie' => 'required|string|max:255',
            'tx_url_trailer_movie' => 'required|string|max:255',
        ];
    }

    public static function messages()
    {
        return [


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

    public function validateMovie($movie)
    {
        if (!$movie) {
            $this->excecao(['id' => ['found' => 'Movie not found']]);
        }
    }
}
