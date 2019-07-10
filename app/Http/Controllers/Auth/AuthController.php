<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    //login

    protected function getLogin()
    {
        return view("login");
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return view("home");
        }

        return view()->with("msjerror","credenciales incorrectas");

    }

    //login

    //registro   

    protected function getRegister()
    {
        return view("registro");
    }

    protected function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $data = $request;
        $user=new User;
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);
        if($user->save()){
            return view("home");
        }
    }

    //registro

    protected function getLogout()
    {
        $this->auth->logout();

        Session::flush();

        return redirect('home');
    }

}