<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 02/12/2018
 * Time: 19:15
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Services\Category\CategoryService;
use Illuminate\Contracts\Container\Container;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('auth');
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $movies = $this->categoryService->list();
        return response()->json($movies);
    }
    public function index2(Container $container)
    {
        $repositorio = $container->make(CategoryService::class);
        return response()->json($repositorio->list(), 200);
    }
}