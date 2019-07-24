<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class FormCrearMateriaController extends Controller
{
    public function __construct()
	{
        $this->middleware('auth');
        $this->middleware(['permission:index materia'], ['only' => 'index']);
		$this->middleware(['permission:create materia'], ['only' => ['crearm']]);
        $this->middleware(['permission:read materia'], ['only' => 'index']);
        $this->middleware(['permission:update materia'], ['only' => ['editarm', 'updatem']]);
        $this->middleware(['permission:delete materia'], ['only' => 'eliminarm']);
	}

    public function index()
    {
        $materias = App\Materia::paginate(5);
        return view('materias.formulario_crear_materia', compact ('materias'));
    }
   
    public function crearm(Request $request)
    {
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

    public function editarm($id)
    {
        $materias = App\Materia::findOrFail($id);
        return view('materias.editar', compact('materias'));
    }

    public function updatem(Request $request, $id)
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

    public function eliminarm($id)
    {
        $materiaEliminar = App\Materia::findOrFail($id);
        $materiaEliminar->delete();

        return back()->with('mensaje', 'Materia Eliminada');
    }
}