<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * @var userService
     *
     */
    protected $userService;

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'tx_email_user';
    }

    public function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required|string',
            'tx_password_user' => 'required|string',
        ]);
    }

    public function credentials(Request $request)
    {
        return $request->only($this->username(), 'tx_password_user');
    }


    /**
     * Validate user registered
     * @param Request $request
     * @return void
     */
    public function checkLogin(Request $request)
    {
        $params = new \stdClass();
        $params->tx_email_user = $request->input('tx_email_user');
        $params->tx_password_user = $request->input('tx_password_user');

        $user = $this->userService->list($params);

    }
}
