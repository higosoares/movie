<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:43
 */

namespace App\Services\Category;


use App\Models\Category;
use App\Repositories\Category\CategoryRepository;
use App\Services\GenericService;
use App\Traits\LancadorDeExcecao;
use Illuminate\Container\Container;
use stdClass;

class CategoryService extends GenericService
{
    use LancadorDeExcecao;

    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        parent::__construct();
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Register new category
     * @param stdClass $params
     * @return Category
     */
    public function register($params)
    {
        //$this->userValidate->validateParameters($params);
        $category = $this->categoryRepository->register($params);
        return $category;
    }


    /**
     * List categories
     * @param \stdClass $params
     * @return array
     */
    public function list($params = null)
    {
        return $this->categoryRepository->list($params);
    }

    /**
     * Edit category
     * @param int $id
     * @param stdClass $params
     * @return Category
     */
    public function edit($id, $params)
    {
        //$this->userValidate->validateParameters($params);
        $category = $this->retrieveById((int) $id);
        $category = $this->categoryRepository->edit($category->id_category, $params);
        $category->refresh();
        return $category;
    }

    /**
     * Delete category
     * @param integer $id
     */
    public function delete($id)
    {
        $category = $this->categoryRepository->retrieve($id);
        //$this->userValidate->validateUser($user);
        $this->categoryRepository->delete($category->id_category);
    }

    /**
     * Retrieve category by id
     * @param int $id
     * @return Category
     */
    public function retrieveById($id): Category
    {
        //$this->userValidate->validateInteger($id);
        $category = $this->categoryRepository->retrieve($id);
        //$this->userValidate->validateUser($movie);
        return $category;
    }

}