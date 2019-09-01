<?php

namespace App\Http\Resource;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use stdClass;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into object.
     *
     * @param $request
     * @return stdClass
     */
    public function toObject($request)
    {
        $params = new stdClass();
        $params->tx_name_movie = $this->tx_name_movie;
        $params->tx_name_director = $this->tx_name_director;
        $params->tx_description_movie = $this->tx_description_movie;
        $params->qt_duration_movie = $this->qt_duration_movie;
        $params->qt_debut_movie = $this->qt_debut_movie;
        $params->qt_year_movie = $this->qt_year_movie;
        $params->tp_situation_movie = $this->tp_situation_movie;
        $params->tx_url_imagem_movie = $this->tx_url_imagem_movie;
        $params->tx_url_trailer_movie = $this->tx_url_trailer_movie;
        $params->qt_star_rating_movie = $this->qt_star_rating_movie;
        return $params;
    }

//$params->tx_name_movie = $request->input('tx_name_movie');
//$params->tx_name_director = $request->input('tx_name_director');
//$params->tx_description_movie = $request->input('tx_description_movie');
//$params->qt_duration_movie = $request->input('qt_duration_movie');
//$params->qt_debut_movie = $request->input('qt_debut_movie');
//$params->qt_year_movie = $request->input('qt_year_movie');
//$params->tp_situation_movie = $request->input('tp_situation_movie');
//$params->tx_url_imagem_movie = $request->input('tx_url_imagem_movie');
//$params->tx_url_trailer_movie = $request->input('tx_url_trailer_movie');
//$params->qt_star_rating_movie = $request->input('qt_star_rating_movie');
}
