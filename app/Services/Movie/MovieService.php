<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\Movie;

use App\Models\Movie;
use App\Traits\LancadorDeExcecao;
use stdClass;
use App\Validates\Movie\MovieValidate;
use App\Interfaces\Movie\MovieServiceInterface;
use App\Interfaces\Movie\MovieRepositoryInterface;
use Illuminate\Support\Collection;

class MovieService implements MovieServiceInterface
{
    use LancadorDeExcecao;


    /*
     * @var MovieValidate
     */
    protected $movieValidate;

        /*
     * @var MovieRepositoryInterface
     */
    protected $movieRepositoryInterface;

    public function __construct(MovieValidate $movieValidate,
    MovieRepositoryInterface $movieRepositoryInterface)
    {
        $this->movieValidate = $movieValidate;
        $this->movieRepositoryInterface = $movieRepositoryInterface;
    }

    /**
     * Register new movie
     * @param stdClass $params
     * @return Movie
     */
    public function register(stdClass $params) : Movie
    {
        $this->movieValidate->validateParameters($params);
        $movie = $this->movieRepositoryInterface->register($params);
        return $movie;
    }


    /**
     * List movies
     * @param \stdClass $params
     * @return Collection
     */
    public function list($params = null) : Collection
    {
        return $this->movieRepositoryInterface->list($params);
    }

    /**
     * Edit movie
     * @param int $id
     * @param stdClass $params
     * @return Movie
     */
    public function edit(int $id, stdClass $params) : Movie
    {
        $this->movieValidate->validateParameters($params);
        $movie = $this->retrieveById((int) $id);
        $movie = $this->movieRepositoryInterface->edit($movie->id_movie, $params);
        return $movie;
    }

    /**
     * Delete movie
     * @param integer $id
     */
    public function delete(int $id)
    {
        $movie = $this->movieRepository->retrieveById($id);
        $this->movieValidate->validateMovie($movie);
        $this->movieRepositoryInterface->delete($movie->id_movie);
    }

    /**
     * Retrieve movie by id
     * @param int $id
     * @return Movie
     */
    public function retrieveById(int $id): Movie
    {
        $this->movieValidate->validateInteger($id);
        $movie = $this->movieRepository->retrieveById($id);
        $this->movieRepositoryInterface->validateMovie($movie);
        return $movie;
    }

}
