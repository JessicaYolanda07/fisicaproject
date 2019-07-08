<?php namespace App\Http\Controllers;

use App\Materia;
use Request;

class MateriaController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}


	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */



	//presenta el formulario para nuevo usuario
	public function agregar_nueva_materia()
	{

		$data=Request::all();

		$materia= new Materias;
		$materia->sigla_materia  =  $data["sigla_materia"];
		$materia->nomb_materia=$data["nomb_materia"];
		$materia->grupo_materia=$data["grupo_materia"];
	

		$resul= $materia->save();

		if($resul){
            
            return view("mensajes.msj_correcto")->with("msj","Materia Registrada Correctamente");   
		}
		else
		{
             
             return view("mensajes.msj_rechazado")->with("msj","hubo un error vuelva a intentarlo");  

		}
	}
	

}