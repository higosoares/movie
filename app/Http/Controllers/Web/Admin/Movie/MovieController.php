<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Web\Admin\Movie;

use App\Enum\MovieEnum;
use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Interfaces\Movie\MovieServiceInterface;
use App\Traits\LancadorDeExcecao;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    use LancadorDeExcecao;

    /*
     * @var MovieInterface
     */
    protected $movieServiceInterface;

    public function __construct(MovieServiceInterface $movieServiceInterface)
    {
        $this->middleware('auth');
        $this->movieServiceInterface = $movieServiceInterface;
    }

    /**
     * Show index page
     *
     * @return View
    */
    public function index()
    {
        return view(MovieEnum::viewIndex);
    }

    /**
     * Show movie page
     *
     * @param Request $request
     * @param $id
     * @return View|void
     * @throws MovieException
    */
    public function show(Request $request, $id)
    {
        try {
            $movie = $this->movieServiceInterface->retrieveById($id);
            return view(MovieEnum::viewShow)->with(['movie' => $movie]);
        } catch (MovieException $exception) {
            $this->excecao($exception->getMessage(), MovieEnum::notFound, $exception->getCode());
        }
    }

    /**
     * Show register form
     *
     * @param Request $request
     * @return View
    */
    public function registerForm(Request $request)
    {
        return view(MovieEnum::viewRegisterForm);
    }

    /**
     * Show edit form
     *
     * @param Request $request
     * @param $id
     * @return View|void
     * @throws MovieException
    */
    public function editForm(Request $request, $id)
    {
        try {
            $movie = $this->movieServiceInterface->retrieveById((int) $id);
            return view(MovieEnum::viewEditForm)->with(['movie' => $movie]);
        } catch (MovieException $exception) {
            $this->excecao($exception->getMessage(), MovieEnum::notFound, $exception->getCode());
        }
    }
}
