<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Container\Container;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('category.index');
    }

    public function formularioCadastro()
    {

    }


    public function register()
    {

    }

    public function formularioEditar()
    {

    }

    public function list()
    {

    }


    public function edit()
    {

    }


    public function delete()
    {

    }

}