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
use App\Interfaces\Movie\MovieServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use app\Requests\Movie\MovieRequest;
use Exception;

class MovieController extends Controller
{
    /*
     * @var MovieInterface
     */
    protected $movieInterface;

    public function __construct(MovieServiceInterface $movieInterface)
    {
        $this->middleware('auth');
        $this->movieInterface = $movieInterface;
    }

    /**
     * Show index page
     * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('movie.index');
    }

    /**
     * Show movie page
     * @return \Illuminate\View\View
    */
    public function show($id)
    {
        $movie = $this->movieInterface->retrieveById($id);
        return view('movie.show')->with(['movie' => $movie]);
    }


    /**
     * Show register form
     * @return \Illuminate\View\View
    */
    public function registerForm()
    {
        return view('movie.registerForm');
    }

    /**
     * Register new movie
     * @param MovieRequest $request
     * @return Response
    */
    public function register(MovieRequest $request)
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

            $movie = $this->movieInterface->register($params);
            $retorno = [
                'status' => 201,
                'resultado' => $movie
            ];
            DB::commit();
        } catch(MovieException $e) {
            DB::rollback();
            $retorno = [
                'status' => 400,
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
        $movie = $this->movieInterface->retrieveById((int) $id);

        return view('movie.editForm')->with([
            'movie' => $movie,
        ]);

    }

    /**
     * Edit movie
     * @param int $id
     * @param MovieRequest $request
     * @return Response
    */
    public function edit($id, MovieRequest $request)
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

            $movie = $this->movieInterface->edit($id, $params);
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
            $this->movieInterface->delete((int)$id);
            $retorno = [
                'status' => 203
            ];
        } catch (Exception $e) {
            $retorno = [
                'status' => 400,
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

}
