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
    /**
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->middleware('auth');
    }


    public function index()
    {

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