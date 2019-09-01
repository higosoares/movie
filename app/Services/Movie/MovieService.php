<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\Movie;

use App\Exceptions\MovieException;
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

    public function __construct(MovieValidate $movieValidate, MovieRepositoryInterface $movieRepositoryInterface)
    {
        $this->movieValidate = $movieValidate;
        $this->movieRepositoryInterface = $movieRepositoryInterface;
    }

    /**
     * Register new movie
     *
     * @param stdClass $params
     * @return Movie
     * @throws MovieException
     */
    public function register(stdClass $params) : Movie
    {
        $this->movieValidate->validateParameters($params);
        return $this->movieRepositoryInterface->register($params);
    }


    /**
     * List movies
     *
     * @param stdClass $params
     * @return Collection
     */
    public function list(stdClass $params = null) : Collection
    {
        return $this->movieRepositoryInterface->list($params);
    }

    /**
     * Edit movie
     *
     * @param int $id
     * @param stdClass $params
     * @return Movie
     * @throws MovieException
     */
    public function edit(int $id, stdClass $params) : Movie
    {
        $this->movieValidate->validateParameters($params);
        $movie = $this->retrieveById($id);
        return $this->movieRepositoryInterface->edit($movie->id_movie, $params);
    }

    /**
     * Delete movie
     *
     * @param integer $id
     * @throws MovieException
     */
    public function delete(int $id)
    {
        $movie = $this->movieRepositoryInterface->retrieveById($id);
        $this->movieValidate->validateMovie($movie);
        $this->movieRepositoryInterface->delete($movie->id_movie);
    }

    /**
     * Retrieve movie by id
     * s
     * @param int $id
     * @return Movie
     * @throws MovieException
     */
    public function retrieveById(int $id): ?Movie
    {
        $this->movieValidate->validateInteger($id);
        $movie = $this->movieRepositoryInterface->retrieveById($id);
        $this->movieValidate->validateMovie($movie);
        return $movie;
    }
}
