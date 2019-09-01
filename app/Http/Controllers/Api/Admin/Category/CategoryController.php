<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Api\Admin\Category;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Exceptions\MovieException;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Interfaces\Category\CategoryServiceInterface;

class CategoryController extends Controller
{
    protected $categoryInterface;

    public function __construct(CategoryServiceInterface $categoryInterface)
    {
        $this->middleware('auth');
        $this->categoryInterface = $categoryInterface;
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
            dd($id);
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
