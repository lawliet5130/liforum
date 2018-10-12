<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\ScientistAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/sc-profile';
    protected function guard()
    {
        return Auth::guard('profiles');
    }
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
            'login' => 'required|string|email|max:255|exists:scientist_accounts',
            'password' => 'required|string|min:6|confirmed',
            'policy' => 'required|accepted',
            'code' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return ScientistAccount::updateOrCreate(['login'=>$data['login'],'login_link'=>$data['code']],[
            'password' => bcrypt($data['password']),
            'acc_status' => 1,
            'login_link' => null
        ]);
    }
}
