<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\Category;

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

    public function __construct(CategoryValidate $categoryValidate,
    CategoryRepositoryInterface $categoryRepositoryInterface)
    {
        $this->categoryValidate = $categoryValidate;
        $this->categoryRepositoryInterface = $categoryRepositoryInterface;
    }

    /**
     * Register new category
     * @param stdClass $params
     * @return Category
     */
    public function register(stdClass $params) : Category
    {
        $this->categoryValidate->validateParameters($params);
        $category = $this->categoryRepositoryInterface->register($params);
        return $category;
    }


    /**
     * List categories
     * @param stdClass $params
     * @return Collection
     */
    public function list($params = null) : Collection
    {
        return $this->categoryRepositoryInterface->list($params);
    }

    /**
     * Edit category
     * @param int $id
     * @param stdClass $params
     * @return Category
     */
    public function edit(int $id, stdClass $params) : Category
    {
        $this->categoryValidate->validateParameters($params);
        $category = $this->retrieveById((int) $id);
        $category = $this->categoryRepositoryInterface->edit($category->id_category, $params);
        return $category;
    }

    /**
     * Delete category
     * @param integer $id
     */
    public function delete(int $id)
    {
        $category = $this->categoryRepository->retrieveById($id);
        $this->categoryValidate->validateInteger($id);
        $this->categoryRepositoryInterface->delete($category->id_category);
    }

    /**
     * Retrieve category by id
     * @param int $id
     * @return Category
     */
    public function retrieveById(int $id): ?Category
    {
        $this->categoryValidate->validateInteger($id);
        $category = $this->categoryRepositoryInterface->retrieveById($id);
        $this->categoryValidate->validateCategory($category);
        return $category;
    }

}
