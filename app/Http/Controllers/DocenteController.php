<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class DocenteController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $docentes = App\Docente::paginate(5);
        return view('formulario_crear_docente', compact ('docentes'));
    }
  
    public function creard(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'ci' => 'required',
            'fecha_nac' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'profesion' => 'required',
            'carrera' => 'required',
            'estado' => 'required',
        ]);

        $docenteNuevo = new App\Docente;
        $docenteNuevo->nombre = $request->nombre;
        $docenteNuevo->apellido_p = $request->apellido_p;
        $docenteNuevo->apellido_m = $request->apellido_m;
        $docenteNuevo->ci = $request->ci;
        $docenteNuevo->fecha_nac = $request->fecha_nac;
        $docenteNuevo->correo = $request->correo;
        $docenteNuevo->telefono = $request->telefono;
        $docenteNuevo->profesion = $request->profesion;
        $docenteNuevo->carrera = $request->carrera;
        $docenteNuevo->estado = $request->estado;
      
        $docenteNuevo->save();

        return back()->with('mensaje', 'Docente guardada');
    }

    public function editard($id)
    {
        $docentes = App\Docente::findOrFail($id);
        return view('editar_docente', compact('docentes'));
    }

    public function updated(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'ci' => 'required',
            'fecha_nac' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'profesion' => 'required',
            'carrera' => 'required',
            'estado' => 'required',
        ]);
        
        $docenteNuevo = App\Docente::findOrFail($id);
        $docenteNuevo->nombre = $request->nombre;
        $docenteNuevo->apellido_p = $request->apellido_p;
        $docenteNuevo->apellido_m = $request->apellido_m;
        $docenteNuevo->ci = $request->ci;
        $docenteNuevo->fecha_nac = $request->fecha_nac;
        $docenteNuevo->correo = $request->correo;
        $docenteNuevo->telefono = $request->telefono;
        $docenteNuevo->profesion = $request->profesion;
        $docenteNuevo->carrera = $request->carrera;
        $docenteNuevo->estado = $request->estado;
     
        $docenteNuevo->save();
        return back()->with('mensaje', 'Docente editado');
    }

    public function eliminard($id)
    {
        $docenteNuevo = App\Docente::findOrFail($id);
        $docenteNuevo->delete();

        return back()->with('mensaje', 'Docente Eliminado');
     }
}