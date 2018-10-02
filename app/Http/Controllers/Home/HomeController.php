<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 01/10/2018
 * Time: 19:20
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        $genres = Category::all();
        return view('home')->with(['movies' => $movies, 'genres' => $genres]);
    }
}