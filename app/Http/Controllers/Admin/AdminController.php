<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Admin;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Services\Category\CategoryService;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->middleware('auth');
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        $category = $this->categoryService->list();
        return view('admin.index')->with(['category' => $category]);
    }

}
