<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Movie;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Services\Movie\MovieService;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /*
     * @var MovieService
     */
    protected $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->middleware('auth');
        $this->movieService = $movieService;
    }

    public function index($id)
    {
        $movie = $this->movieService->retrieveById($id);
        return view('movie.single')->with(['movie' => $movie]);
    }

    public function listForm()
    {
        return view('movie.index');
    }

    public function list()
    {
        $movies = $this->movieService->list();
        return response()->json($movies);
    }

    /**
     * Show register form
     * @return \Illuminate\View\View
     */
    public function registerForm()
    {
        return view('movie.register');
    }

    /**
     * Register new movie
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_movie = $request->input('tx_name_movie');
            $params->tx_name_director = $request->input('tx_name_director');
            $params->tx_description_movie = $request->input('tx_description_movie');
            $params->qt_duration_movie = $request->input('qt_duration_movie');
            $params->qt_debut_movie = $request->input('qt_debut_movie');
            $params->qt_year_movie = $request->input('qt_year_movie');
            $params->tp_situation_movie = $request->input('tp_situation_movie');
            $params->tx_url_imagem_movie = $request->input('tx_url_imagem_movie');
            $params->tx_url_trailer_movie = $request->input('tx_url_trailer_movie');
            $params->qt_star_rating_movie = $request->input('qt_star_rating_movie');

            $movie = $this->movieService->register($params);
            $retorno = [
                'status' => 201,
                'resultado' => $movie
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
        $movie = $this->movieService->retrieveById((int) $id);

        return view('movie.edit')->with([
            'movie' => $movie,
        ]);

    }

    /**
     * Edit movie
     * @param int $id
     * @param Request $request
     * @return Response
     */
    public function edit($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_movie = $request->input('tx_name_movie');
            $params->tx_name_director = $request->input('tx_name_director');
            $params->tx_description_movie = $request->input('tx_description_movie');
            $params->qt_duration_movie = $request->input('qt_duration_movie');
            $params->qt_debut_movie = $request->input('qt_debut_movie');
            $params->qt_year_movie = $request->input('qt_year_movie');
            $params->tp_situation_movie = $request->input('tp_situation_movie');
            $params->tx_url_imagem_movie = $request->input('tx_url_imagem_movie');
            $params->tx_url_trailer_movie = $request->input('tx_url_trailer_movie');
            $params->qt_star_rating_movie = $request->input('qt_star_rating_movie');

            $movie = $this->movieService->edit($id, $params);
            $retorno = [
                'status' => 200,
                'resultado' => $movie
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
     * Delete movie
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        try {
            $this->movieService->delete((int)$id);
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