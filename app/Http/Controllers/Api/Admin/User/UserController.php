<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:45
 */

namespace App\Http\Controllers\Api\Admin\User;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     *
     * @var UserService
     */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;

    }

    /**
     * Show index page
     * @return \Illuminate\View\View
    */
    public function index()
    {
        $users = $this->userService->list();
        return response()->json($users);

    }

    /**
     * Show register form
     * @return \Illuminate\View\View
     */
    public function registerForm()
    {
        return view('user.registerForm');
    }

    /**
     * Register new user
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->name = $request->input('name');
            $params->email = $request->input('email');
            $params->password = $request->input('password');

            $user = $this->userService->register($params);
            $retorno = [
                'status' => 201,
                'resultado' => $user
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
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function editForm($id)
    {
        $user = $this->userService->retrieveById((int) $id);

        return view('user.editForm')->with([
            'user' => $user,
        ]);
    }

    /**
     * Edit user
     * @param int $id
     * @param UserRequest $request
     * @return Response
     */
    public function edit($id, UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->name = $request->input('name');
            $params->email = $request->input('email');
            $params->password = $request->input('password');

            $user = $this->userService->edit($id, $params);
            $retorno = [
                'status' => 200,
                'resultado' => $user
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
     * Delete user
     * @param $id
     * @return Response
     */
    public function delete($id)
    {
        try {
            $this->userService->delete((int) $id);
            $retorno = [
                'status' => 203
            ];
        } catch(MovieException $e) {
            $retorno = [
                'status' => $e->getCode(),
                'resultado' => $e->retorno
            ];
        }
        return response()->json($retorno)->setStatusCode($retorno['status']);
    }

}
