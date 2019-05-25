<?php

namespace App\Interfaces\Movie;

use stdClass;
use App\Models\Movie;
use Illuminate\Support\Collection;

interface MovieServiceInterface
{

    public function register(stdClass $params) : Movie;

    public function edit(int $id, stdClass $params) : Movie;

    public function delete(int $id);

    public function list() : Collection;

    public function retrieveById(int $id) : ?Movie;

}
