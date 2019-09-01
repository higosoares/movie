<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:44
 */

namespace App\Http\Controllers\Api\Admin\Movie;

use App\Enum\MovieEnum;
use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Movie\MovieRequest;
use App\Http\Resource\CategoryResource;
use App\Http\Resource\GenericResource;
use App\Interfaces\Movie\MovieServiceInterface;
use App\Traits\LancadorDeExcecao;
use App\Traits\RequestResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Exception;
use stdClass;

class MovieController extends Controller
{
    use LancadorDeExcecao;
    use RequestResponse;

    /*
     * @var MovieInterface
     */
    protected $movieServiceInterface;

    public function __construct(MovieServiceInterface $movieServiceInterface)
    {
        $this->middleware('auth.basic');
        $this->movieServiceInterface = $movieServiceInterface;
    }

    /**
     * Register new movie
     *
     * @param Request $request
     * @return GenericResource|void
     * @throws MovieException
    */
    public function register(Request $request)
    {
        dd('cheguei');
        DB::beginTransaction();
        try {

            $params = new CategoryResource($request);

            $movie = $this->movieServiceInterface->register($params);
            DB::commit();
            return new GenericResource($this->response(201, $movie));
        } catch(MovieException $exception) {
            DB::rollback();
            $this->excecao($exception->getMessage(), MovieEnum::notCreated, $exception->getCode());
        }
    }


    /**
     * Edit movie
     *
     * @param int $id
     * @param MovieRequest $request
     * @return GenericResource|void
     * @throws MovieException
     */
    public function edit($id, MovieRequest $request)
    {
        DB::beginTransaction();
        try {
            $params = new CategoryResource($request);

            $movie = $this->movieServiceInterface->edit($id, $params);
            DB::commit();
            return new GenericResource($this->response(200, $movie));
        } catch(MovieException $exception) {
            DB::rollback();
            $this->excecao($exception->getMessage(), MovieEnum::notUpdated, $exception->getCode());
        }
    }

    /**
     * Delete movie
     *
     * @param Request $request
     * @param $id
     * @return GenericResource|void
     * @throws MovieException
    */
    public function delete(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->movieServiceInterface->delete((int)$id);
            DB::commit();
            return new GenericResource($this->response(203, ''));
        } catch (MovieException $exception) {
            DB::rollback();
            $this->excecao($exception->getMessage(), MovieEnum::notDeleted, $exception->getCode());
        }
    }
}
