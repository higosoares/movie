<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Api\Admin\Category;

use App\Enum\CategoryEnum;
use App\Http\Resource\GenericResource;
use App\Traits\LancadorDeExcecao;
use App\Traits\RequestResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Exceptions\MovieException;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Interfaces\Category\CategoryServiceInterface;

class CategoryController extends Controller
{
    use LancadorDeExcecao;
    use RequestResponse;

    protected $categoryInterface;

    public function __construct(CategoryServiceInterface $categoryInterface)
    {
//        $this->middleware('auth');
        $this->categoryInterface = $categoryInterface;
    }

    /**
     * Register new category
     * @param Request $request
     * @return GenericResource|void
     * @throws MovieException
     */
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_category = $request->input('tx_name_category');

            $category = $this->categoryInterface->register($params);
            DB::commit();
            return new GenericResource($this->response(201, $category));
        } catch(MovieException $exception) {
            DB::rollback();
            $this->excecao($exception->getMessage(), CategoryEnum::notCreated, $exception->getCode());
        }
    }

    /**
     * Edit category
     *
     * @param int $id
     * @param Request $request
     * @return GenericResource|void
     * @throws MovieException
     */
    public function edit($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_category = $request->input('tx_name_category');
            dd($params);

            $category = $this->categoryInterface->edit($id, $params);
            DB::commit();
            return new GenericResource($this->response(200, $category));
        } catch(MovieException $exception) {
            DB::rollback();
            $this->excecao($exception->getMessage(), CategoryEnum::notUpdated, $exception->getCode());
        }
    }

    /**
     * Delete category
     *
     * @param Request $request
     * @param $id
     * @return GenericResource|void
     * @throws MovieException
     */
    public function delete(Request $request, $id)
    {
        try {
            $this->categoryInterface->delete((int)$id);
            return new GenericResource($this->response(203, ''));
        } catch (MovieException $exception) {
            $this->excecao($exception->getMessage(), CategoryEnum::notCreated, $exception->getCode());
        }
    }
}
