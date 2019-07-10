<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;

class ProgramacionHController extends Controller
{ 
    public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
        $progamacionmathors = App\Progamacionmathor::paginate(5);
        return view('programacionh', compact ('progamacionmathors'));
    }
   
    public function materiatodo()
    {
        $materias = App\Materia::all();
        $docentes = App\Docente::all();
        $progamacionmathors = App\Progamacionmathor::paginate(5);
        
        return view('programacionh', compact ('materias', 'progamacionmathors', 'docentes'));
    }
    
   
    public function crearh(Request $request)
    {
        //dd($request);
        //return $request->all();
        $this->validate($request, [
            'id_materia' => 'required',
            'id_docente' => 'required',
            'id_horario' => 'required',
            'grupo'=> 'required',
            'ambiente'=> 'required',
            'gestion'=> 'required',
            'cupo_max' => 'required',
           
        ]);
      
        $programacionNueva = new App\Progamacionmathor;
        $programacionNueva->id_materia = $request->id_materia;
        $programacionNueva->id_docente = $request->id_docente;
        $programacionNueva->id_horario = $request->id_horario;
        $programacionNueva->grupo = $request->grupo;
        $programacionNueva->ambiente = $request->ambiente;
        $programacionNueva->gestion = $request->gestion;
        $programacionNueva->cupo_max = $request->cupo_max;
     
        $programacionNueva->save();

        return back()->with('mensaje', 'Programacion realizada');
    }

    public function editar($id)
    {
        $materias = App\Materia::all();
        $progamacionmathors = App\Progamacionmathor::findOrFail($id);
        return view('editar_progamacion', compact('progamacionmathors', 'materias'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_materia' => 'required',
            'id_docente' => 'required',
            'id_horario' => 'required',
            'grupo'=> 'required',
            'ambiente'=> 'required',
            'gestion'=> 'required',
            'cupo_max' => 'required',
           
        ]);
        $programacionUpdate = new App\Progamacionmathor;
        $programacionUpdate->id_materia = $request->id_materia;
        $programacionUpdate->id_docente = $request->id_docente;
        $programacionUpdate->id_horario = $request->id_horario;
        $programacionUpdate->grupo = $request->grupo;
        $programacionUpdate->ambiente = $request->ambiente;
        $programacionUpdate->gestion = $request->gestion;
        $programacionUpdate->cupo_max = $request->cupo_max;
     
        $programacionUpdate->save();
        return back()->with('mensaje', 'programacion editada');
    }
    public function eliminarh($id)
    {
        $programacionEliminar = App\Progamacionmathor::findOrFail($id);
        $programacionEliminar->delete();

        return back()->with('mensaje', 'Programacion Eliminada');
 
    }
    
}
