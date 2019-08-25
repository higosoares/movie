<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Web\Admin;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Interfaces\Category\CategoryServiceInterface;
use App\Interfaces\Movie\MovieServiceInterface;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    protected $categoryServiceInterface;
    protected $movieServiceInterface;

    public function __construct(CategoryServiceInterface $categoryServiceInterface, MovieServiceInterface $movieServiceInterface)
    {
        $this->middleware('auth');
        $this->categoryServiceInterface = $categoryServiceInterface;
        $this->movieServiceInterface = $movieServiceInterface;
    }


    /**
     * Show index page
     * @return \Illuminate\View\View
    */
    public function index()
    {
        $categories = $this->categoryServiceInterface->list();
        $movies = $this->movieServiceInterface->list();
        return view('admin.index')->with(['categories' => $categories, 'movies' => $movies]);
    }

}
