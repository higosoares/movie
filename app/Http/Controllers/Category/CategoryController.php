<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Category;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Exceptions\MovieException;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Interfaces\Category\CategoryInterface;

class CategoryController extends Controller
{
    protected $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->middleware('auth');
        $this->categoryInterface = $categoryInterface;
    }

    /**
     * Show index page
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            $categories = $this->categoryInterface->list();

            return view('category.index')->with(['categories' => $categories]);
        } catch (MovieException $e) {
            abort(404);
        }
    }

    /**
     * Show category page
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

        try {
            $category = $this->categoryInterface->retrieveById($id);
            return view('category.show')->with(['category' => $category]);
        } catch (MovieException $e) {
            abort(404);
        }
    }

    /**
     * Show register form
     * @return \Illuminate\View\View
     */
    public function registerForm()
    {
        return view('category.registerForm');
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

            $category = $this->categoryInterface->register($params);
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
        try {
            $category = $this->categoryInterface->retrieveById((int) $id);

            return view('category.editForm')->with([
                'category' => $category,
            ]);
        } catch (MovieException $e) {
            abort(404);
        }
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

            $category = $this->categoryInterface->edit($id, $params);
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
            $this->categoryInterface->delete((int)$id);
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
