<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\Movie;


use App\Models\Movie;
use App\Repositories\Movie\MovieRepository;
use App\Services\GenericService;
use App\Traits\LancadorDeExcecao;
use Illuminate\Container\Container;
use stdClass;

class MovieService extends GenericService
{
    use LancadorDeExcecao;

    /*
     * @var MovieRepository
     */
    protected $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        parent::__construct();
        $this->movieRepository = $movieRepository;
    }

    /**
     * Register new movie
     * @param stdClass $params
     * @return Movie
     */
    public function register($params)
    {
        //$this->userValidate->validateParameters($params);
        $movie = $this->movieRepository->register($params);
        return $movie;
    }


    /**
     * List movies
     * @param \stdClass $params
     * @return array
     */
    public function list($params = null)
    {
        return $this->movieRepository->list($params);
    }

    /**
     * Edit movie
     * @param int $id
     * @param stdClass $params
     * @return Movie
     */
    public function edit($id, $params)
    {
        //$this->userValidate->validateParameters($params);
        $movie = $this->retrieveById((int) $id);
        $movie = $this->movieRepository->edit($movie->id_movie, $params);
        $movie->refresh();
        return $movie;
    }

    /**
     * Delete movie
     * @param integer $id
     */
    public function delete($id)
    {
        $movie = $this->movieRepository->retrieve($id);
        //$this->userValidate->validateUser($user);
        $this->movieRepository->delete($movie->id_movie);
    }

    /**
     * Retrieve movie by id
     * @param int $id
     * @return Movie
     */
    public function retrieveById($id): Movie
    {
        //$this->userValidate->validateInteger($id);
        $movie = $this->movieRepository->retrieve($id);
        //$this->userValidate->validateUser($movie);
        return $movie;
    }

}