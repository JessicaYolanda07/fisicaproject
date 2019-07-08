<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

use App\Http\Requests\HorarioFormRequest;

class HorarioController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

    public function index1()
    {
        $horarios = App\Horario::paginate(5);
        return view('formulario_crear_horario', compact('horarios'));
    }
  

   
    public function crear(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'dia' => 'required',
            'hora_desde' => 'required',
            'hora_hasta' => 'required',
          
        ]);

     

        $horarioNueva = new App\Horario;
        $horarioNueva->dia = $request->dia;
        $horarioNueva->hora_desde = $request->hora_desde;
        $horarioNueva->hora_hasta = $request->hora_hasta;
      
        $horarioNueva->save();

        return back()->with('mensaje', 'horario guardado');
    }

    public function editar($id)
    {
        $horario = App\Horario::findOrFail($id);
        return view('editar_horario', compact('horario'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'dia' => 'required',
            'hora_desde' => 'required',
            'hora_hasta' => 'required',
           

        ]);
        
        $horarioUpdate = App\Horario::findOrFail($id);
        $horarioUpdate->dia = $request->dia;
        $horarioUpdate->hora_desde = $request->hora_desde;
        $horarioUpdate->hora_hasta = $request->hora_hasta;
     

        $horarioUpdate->save();
        return back()->with('mensaje', 'horario editado');
    }
    public function eliminar($id)
    {
        $horarioEliminar = App\Horario::findOrFail($id);
        $horarioEliminar->delete();

        return back()->with('mensaje', 'horario Eliminado');
 
    }
   
}
