<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Web\Category;

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
}
