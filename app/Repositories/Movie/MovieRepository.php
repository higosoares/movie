<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:42
 */

namespace App\Repositories\Movie;


use App\Interfaces\GenericInterface;
use App\Models\Movie;
use stdClass;

class MovieRepository implements GenericInterface
{
    /**
     * Register new movie
     * @param stdClass $params
     * @return Movie
     */
    public function register($params)
    {
        $entity = new Movie([
            'tx_name_movie' => $params->tx_name_movie,
            'tx_name_director' => $params->tx_name_director,
            'tx_description_movie' => $params->tx_description_movie,
            'qt_duration_movie' => $params->qt_duration_movie,
            'qt_debut_movie' => $params->qt_debut_movie,
            'qt_year_movie' => $params->qt_year_movie,
            'tp_situation_movie' => $params->tp_situation_movie,
            'tx_url_imagem_movie' => $params->tx_url_imagem_movie,
            'tx_url_trailer_movie' => $params->tx_url_trailer_movie,
            'qt_star_rating_movie' => $params->qt_star_rating_movie,
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Edit user
     * @param int $id
     * @param stdClass $params
     * @return Movie
     */
    public function edit($id, $params)
    {
        $entity = $this->retrieve($id);
        $entity->fill([
            'tx_name_movie' => $params->tx_name_movie,
            'tx_name_director' => $params->tx_name_director,
            'tx_description_movie' => $params->tx_description_movie,
            'qt_duration_movie' => $params->qt_duration_movie,
            'qt_debut_movie' => $params->qt_debut_movie,
            'qt_year_movie' => $params->qt_year_movie,
            'tp_situation_movie' => $params->tp_situation_movie,
            'tx_url_imagem_movie' => $params->tx_url_imagem_movie,
            'tx_url_trailer_movie' => $params->tx_url_trailer_movie,
            'qt_star_rating_movie' => $params->qt_star_rating_movie,
        ]);
        $entity->save();
        $entity->refresh();
        return $entity;
    }

    /**
     * Delete movie
     */
    public function delete($id)
    {
        $entity = $this->retrieve($id);
        return $entity->delete();
    }

    /**
     * List movie
     * @param \stdClass $params
     * @return array
     */
    public function list($params=null)
    {
        $query = Movie::query();
        if (isset($params->tp_situation_movie)) {
            $query->where('tp_situation_movie', $params->tp_situation_movie);
        }

        if (isset($params->tx_name_movie)) {
            $text = $params->tx_name_movie;
            $query->where( function ($q2) use ( $text ) {
                $q2->where( 'tx_name_movie', 'ilike', "%$text%" );
            });
        }
        $query->orderBy('tx_name_movie');
        return $query->get();
    }

    /**
     * Retrieve movie
     * @param int $id
     * @return Movie
     */
    public function retrieve($id)
    {
        return Movie::find($id);
    }
}