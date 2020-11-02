<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Admin;

class AdminLoginController extends Controller
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
    protected $redirectTo = ('admin.login');

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout')->except('index');
    }

    public function login(){
          return view('admin.dashboard.index');
    }

    public function showLoginForm()
    {
          return view('auth.adminLogin');
    }

    public function showRegisterPage()
    {
          return view('admin.adminRegister');
    }

    public function username()
    {
            return 'username';
    }

    protected function guard()
    {
          return Auth::guard('admin.admin');
    }

    public function register(Request $request)
    {
          $request->validate([
              'name'      => 'required|string|unique:admins',
              'username'  => 'required|string|unique:admins',
              'email'     => 'required|string|email|unique:admins',
              'password'  => 'required|string|min:6|admins'
          ]);
          \App\Admin::create($request->all());
          return redirect()->route('admin.admin-login')->with('success', 'Successfully register!');
    }
}
