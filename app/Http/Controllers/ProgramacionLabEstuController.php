<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App;

class ProgramacionLabEstuController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:create progra_estudiante'], ['only' => ['create']]);
        $this->middleware(['permission:index progra_estudiante'], ['only' => 'index']);   
    }

    public function index()
    { 
        $progamacionmathors = App\Progamacionmathor::all();
        $user = Auth::user();
        $programacionN = $user->programacionnormalestu['id'];
        $programacionL = $user->programacionlabestu['id'];
        
        if($programacionN != ''){
            if($programacionL == '' ){
                return view('programacion_lab_estu.tablaindex', compact ('progamacionmathors' ));
            } else{
                return view('programacion_lab_estu.imprimir_progra_lab', compact ('progamacionmathors' ));
            } 
        } else{
            return view('programacion_lab_estu.falta_prog_teorica', compact ('progamacionmathors' ));
        }
    }

    public function crearlab(Request $request)
    {
        $this->validate($request, [
            'id_materia_lab' => 'required',
            'id_usu_estudiante' => 'required',
            'numero_recibo' => 'required',
        ]);
      
        $programacionLabNueva = new App\ProgramacionLabestu;
        $programacionLabNueva->id_materia_lab = $request->id_materia_lab;
        $programacionLabNueva->id_usu_estudiante = $request->id_usu_estudiante;
        $programacionLabNueva->numero_recibo = $request->numero_recibo;
       
        $programacionLabNueva->save();

        return back()->with('mensaje', 'Programacion realizada');
    }
    public function lista_alumnos_sin_recibo()
    {
        $materias = App\Materia::all();
        $programacionlab = App\ProgramacionLabestu::all();
       
        return view('programacion_lab_estu.lista_alumnos_sin_recibo', compact ( 'programacionlab', 'materias' ));
    }
    public function lista_alumnos_con_recibo()
    {
        $materias = App\Materia::all();
        $programacionlab = App\ProgramacionLabestu::all();
       
        return view('programacion_lab_estu.lista_alumnos_con_recibo', compact ('programacionlab', 'materias' ));
    }
    public function updatelab(Request $request, $id)
    {
        $this->validate($request, [
            'numero_recibo' => 'required', 
        ]);

        $programacionLabUpdate = App\ProgramacionLabestu::findOrFail($id);
        $programacionLabUpdate->numero_recibo = $request->numero_recibo;
            
        $programacionLabUpdate->save();

        return back()->with('mensaje', 'alumno con recibo');
    }
}
