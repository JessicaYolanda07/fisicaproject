<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class FormCrearMateriaController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $materias = App\Materia::paginate(5);
        return view('formulario_crear_materia', compact ('materias'));
    }
  

   
    public function crear(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'nomb_materia' => 'required',
            'sigla_materia' => 'required',
            'carrera_materia' => 'required',
        ]);

     

        $materiaNueva = new App\Materia;
        $materiaNueva->nomb_materia = $request->nomb_materia;
        $materiaNueva->sigla_materia = $request->sigla_materia;
        $materiaNueva->carrera_materia = $request->carrera_materia;
      
        $materiaNueva->save();

        return back()->with('mensaje', 'Materia guardada');
    }

    public function editar($id)
    {
        $materia = App\Materia::findOrFail($id);
        return view('editar', compact('materias'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nomb_materia' => 'required',
            'sigla_materia' => 'required',
            'carrera_materia' => 'required',
           

        ]);
        
        $materiaUpdate = App\Materia::findOrFail($id);
        $materiaUpdate->nomb_materia = $request->nomb_materia;
        $materiaUpdate->sigla_materia = $request->sigla_materia;
        $materiaUpdate->carrera_materia = $request->carrera_materia;
     

        $materiaUpdate->save();
        return back()->with('mensaje', 'Materia editada');
    }
    public function eliminar($id)
    {
        $materiaEliminar = App\Materia::findOrFail($id);
        $materiaEliminar->delete();

        return back()->with('mensaje', 'Materia Eliminada');
 
    }
}
