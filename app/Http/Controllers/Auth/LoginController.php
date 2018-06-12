<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        //$this->middleware('auth');
    }

    public function username()
    {
        return 'user';
    }

    public function login(Request $req)
    {
        $credentials = $this->validate(request(), [
            'user'  => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['user' => $req->input('user'), 'password' => $req->input('password')])) {
            return redirect()->intended('/dashboard');
        }
        return back()
                    ->withErrors(['user' => trans('auth.failed'), 'password' => trans('auth.failed')])
                    ->withInput(request(['user']));
    }

    public function loguout (Request $request) {
        $this->guard('web')->logout();
        return redirect()->intended('admin');
    }
}
