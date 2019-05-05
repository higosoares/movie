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
use App\Interfaces\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Validates\Category\CategoryValidate;

class CategoryService implements CategoryInterface
{
    use LancadorDeExcecao;

    protected $categoryRepository;
    protected $categoryValidate;

    public function __construct(CategoryRepository $categoryRepository, CategoryValidate $categoryValidate)
    {
        $this->categoryRepository = $categoryRepository;
        $this->categoryValidate = $categoryValidate;
    }

    /**
     * Register new category
     * @param stdClass $params
     * @return Category
     */
    public function register(stdClass $params) : Category
    {
        $this->categoryValidate->validateParameters($params);
        $category = $this->categoryRepository->register($params);
        return $category;
    }


    /**
     * List categories
     * @param stdClass $params
     * @return Collection
     */
    public function list($params = null) : Collection
    {
        return $this->categoryRepository->list($params);
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
        $category = $this->categoryRepository->edit($category->id_category, $params);
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
        $this->categoryRepository->delete($category->id_category);
    }

    /**
     * Retrieve category by id
     * @param int $id
     * @return Category
     */
    public function retrieveById(int $id): ?Category
    {
        $this->categoryValidate->validateInteger($id);
        $category = $this->categoryRepository->retrieveById($id);
        $this->categoryValidate->validateCategory($category);
        return $category;
    }

}
