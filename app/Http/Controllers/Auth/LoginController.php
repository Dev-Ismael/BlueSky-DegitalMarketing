<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    /*======================================================
    ====== Overwrite Login Function
    ======================================================*/
    public function login(Request $request)
    {

        // Check Validator
        $validator = Validator::make($request->all(), [
            'email'      => ['required', 'email', 'max:100'],
            'password'   => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return response() -> json([
                'status' => 'error',
                'msg'    => 'validation failed',
                'errors' => $validator->getMessageBag()->toArray()

            ]);
        }


        // credentials Success Create auth session
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response() -> json([
                "status" => 'success' ,   // Created Successfully
                "msg" => "Login Operation Successfully" ,
            ]);
        }

        // credentials invalid
        return response() -> json([
            "status" => 'error' ,   // Created Successfully
            'msg'    => 'invalid credentials',
            "errors" => [ 'credentials' => "Oppes! You have entered invalid credentials" ],
        ]);



    }



}
