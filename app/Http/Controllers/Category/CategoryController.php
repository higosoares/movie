<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Category;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Services\Category\CategoryService;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('auth');
        $this->categoryService = $categoryService;
    }


    public function index($id)
    {
        $category = $this->categoryService->retrieveById($id);
        return view('category.index')->with(['category' => $category]);
    }

    public function list()
    {
        $movies = $this->categoryService->list();
        return response()->json($movies);
    }

    /**
     * Show register form
     * @return \Illuminate\View\View
     */
    public function registerForm()
    {
        return view('category.register');
    }

    /**
     * Register new category
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_category = $request->input('tx_name_category');

            $category = $this->categoryService->register($params);
            $retorno = [
                'status' => 201,
                'resultado' => $category
            ];
            DB::commit();
        } catch(MovieException $e) {
            DB::rollback();
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

    /**
     * Show edit form
     * @return \Illuminate\View\View
     */
    public function editForm($id)
    {
        $category = $this->categoryService->retrieveById((int) $id);

        return view('category.edit')->with([
            'category' => $category,
        ]);

    }

    /**
     * Edit category
     * @param int $id
     * @param Request $request
     * @return Response
     */
    public function edit($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_category = $request->input('tx_name_category');

            $category = $this->categoryService->edit($id, $params);
            $retorno = [
                'status' => 200,
                'resultado' => $category
            ];
            DB::commit();
        } catch(MovieException $e) {
            DB::rollback();
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);

    }

    /**
     * Delete category
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        try {
            $this->categoryService->delete((int)$id);
            $retorno = [
                'status' => 203
            ];
        } catch (MovieException $e) {
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

}