<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TablaController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        return view('tablaindex');
    }

    public function create()
    {
        return "estoy en create de tabla";
    }
}