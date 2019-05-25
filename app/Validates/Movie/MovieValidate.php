<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:51
 */

namespace App\Validates\Movie;

use Exception;

class MovieValidate
{
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
            throw new Exception($validator->failed());
        }
    }


    public function validateInteger($id)
    {
        if (!is_int($id)) {
            throw new Exception('Id invalid');
        }
    }

    public function validateMovie($movie)
    {
        if (!$movie) {
            throw new Exception('Movie not found');
        }
    }
}
