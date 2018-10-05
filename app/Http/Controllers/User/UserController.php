<?php
/**
 * Created by PhpStorm.
 * User: HIGO
 * Date: 18/09/2018
 * Time: 17:45
 */

namespace App\Http\Controllers\User;

use App\Exceptions\MovieException;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Container\Container;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     *
     * @var UserService
     */
    protected $userService;

    public function __construct(Container $container)
    {
        $this->middleware('guest');
        $this->userService = $container->make(UserService::class);

    }

    /**
     * Show register form
     * @return \Illuminate\View\View
     */
    public function registerForm()
    {
        return view('user.register');
    }

    /**
     * Register new user
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $acesso = $this->verificarAcesso();
        if ($acesso) {
            return $acesso;
        }
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_user = $request->input('tx_name_user');
            $params->tx_email_user = $request->input('tx_email_user');
            $params->tx_password_user = $request->input('tx_password_user');

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
        $acesso = $this->verificarAcesso('html');
        if ($acesso) {
            return $acesso;
        }

        $user = $this->userService->recuperarPorId((int) $id);

        return view('user.edit')->with([
            'user' => $user,
        ]);
    }

    /**
     * Edit user
     * @param int $id
     * @param Request $request
     * @return Response
     */
    public function edit($id, Request $request)
    {
        $acesso = $this->verificarAcesso();
        if ($acesso) {
            return $acesso;
        }
        DB::beginTransaction();
        try {
            $params = new \stdClass();
            $params->tx_name_user = $request->input('tx_name_user');
            $params->tx_email_user = $request->input('tx_email_user');
            $params->tx_password_user = $request->input('tx_password_user');

            $user = $this->userService->edit($request->input('id'), $params);
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
        $acesso = $this->verificarAcesso();
        if ($acesso) {
            return $acesso;
        }
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

    public function verifyAccess()
    {
        if(!Auth::check()){
            return view('acesso_nao_autorizado');
        }
    }


}