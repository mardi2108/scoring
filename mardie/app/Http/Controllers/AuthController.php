<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showFormLogin()
    {
    	return view('auth.login');
    }

    public function showFormRegister()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'username' => 'required',

        ]);
 
        $user = User::create([
            'name' => trim($request->name),
            'username' => trim($request->username),
            'email' => strtolower($request->email),
            'password' => bcrypt($request->password),
            'bank' => trim($request->bank),
            'norek' => trim($request->norek),
            'phone' => trim($request->phone)
        ]);

        session()->flash('message', 'Your account is created');
       
        return redirect('login');
    }

    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('username', 'password')))
        {
    		return redirect('/dashboard');
    	}
    	return redirect('/login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect('/login');
    }
}
