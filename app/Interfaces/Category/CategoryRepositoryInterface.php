<?php

namespace App\Interfaces\Category;

use stdClass;
use App\Models\Category;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface
{
    public function register(stdClass $params) : Category;

    public function edit(int $id, stdClass $params) : Category;

    public function delete(int $id);

    public function list() : Collection;

    public function retrieveById(int $id) : ?Category;
}
