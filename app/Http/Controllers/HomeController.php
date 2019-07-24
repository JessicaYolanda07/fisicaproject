<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $rol = $user->roles->implode('name', ', ');
        switch ($rol)
        {
          case 'super-admin':
            $saludo = 'Bienvenido super-admin';
            return view('home', compact('saludo'));
            break;
          case 'director':
              $saludo = 'Bienvenido director';
              return view('home', compact('saludo'));
            break;
          case 'docente':
              $saludo = 'Bienvenido docente';
              return view('home', compact('saludo'));
            break;
          case 'estudiante':
            $saludo = 'Bienvenido estudiante';
            return view('home', compact('saludo'));
            break;

        }
      
    }
}
