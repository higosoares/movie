<?php

namespace App\Http\Controllers\Auth;

use App\Services\User\UserService;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Where to redirect users after registration.
     * @var UserService
     */
    protected $userService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'tx_name_user' => 'required|string|max:255',
            'tx_email_user' => 'required|string|email|max:255|unique:tb_user',
            'tx_password_user' => 'required|string|min:6|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        //return $this->userService->register($data);

        return User::create([
            'tx_name_user' => $data['tx_name_user'],
            'tx_email_user' => $data['tx_email_user'],
            'tx_password_user' => Hash::make($data['tx_password_user']),
            'tp_situation_user' => 1,
        ]);
    }
}
