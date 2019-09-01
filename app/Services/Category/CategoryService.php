<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\Category;

use App\Exceptions\MovieException;
use stdClass;
use App\Models\Category;
use App\Traits\LancadorDeExcecao;
use Illuminate\Support\Collection;
use App\Interfaces\Category\CategoryServiceInterface;
use App\Interfaces\Category\CategoryRepositoryInterface;
use App\Validates\Category\CategoryValidate;

class CategoryService implements CategoryServiceInterface
{
    use LancadorDeExcecao;

    protected $categoryValidate;
    protected $categoryRepositoryInterface;

    public function __construct(CategoryValidate $categoryValidate, CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $this->categoryValidate = $categoryValidate;
        $this->categoryRepositoryInterface = $categoryRepositoryInterface;
    }

    /**
     * Register new category
     *
     * @param stdClass $params
     * @return Category
     * @throws MovieException
     */
    public function register(stdClass $params) : Category
    {
        $this->categoryValidate->validateParameters($params);
        return $this->categoryRepositoryInterface->register($params);
    }


    /**
     * List categories
     *
     * @return Collection
     */
    public function list() : Collection
    {
        return $this->categoryRepositoryInterface->list();
    }

    /**
     * Edit category
     *
     * @param int $id
     * @param stdClass $params
     * @return Category
     * @throws MovieException
     */
    public function edit(int $id, stdClass $params) : Category
    {
        $this->categoryValidate->validateParameters($params);
        $category = $this->retrieveById($id);
        return $this->categoryRepositoryInterface->edit($category->id_category, $params);
    }

    /**
     * Delete category
     *
     * @param integer $id
     * @throws MovieException
     */
    public function delete(int $id)
    {
        $category = $this->categoryRepositoryInterface->retrieveById($id);
        $this->categoryValidate->validateInteger($id);
        $this->categoryRepositoryInterface->delete($category->id_category);
    }

    /**
     * Retrieve category by id
     *
     * @param int $id
     * @return Category
     * @throws MovieException
     */
    public function retrieveById(int $id): ?Category
    {
        $this->categoryValidate->validateInteger($id);
        $category = $this->categoryRepositoryInterface->retrieveById($id);
        $this->categoryValidate->validateCategory($category);
        return $category;
    }

}
