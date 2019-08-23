@extends('plantilla')
@section('seccion')
    
    <section class="content-header">
        <h1>
          PROGRAMACÍON DE HORARIOS
        </h1>
      </section> 
      <section class="content">
        <div class="container">
          <section class="col-lg-10 connectedSortable">
            <div calss= "container">
              <div class="box box-primary">
                <div class="wrap">
                  <form action="{{ route('crearlab') }}" method="POST" class="formulario">
                    @csrf
                    @if ($errors->has('id_materia_lab'))
                      <div class="alert alert-danger">
                        Seleccione una materia para poder programar
                      </div>
                    @endif

                    @if ($errors->has('id_usu_estudiante'))
                      <div class="alert alert-danger">
                        no se pudo introducir el id del usuario
                      </div>
                    @endif
                    <div  class = " radio ">           
                      <table class="table table-hover table-condensed table-bordered">
                        <tr>
                          <td><h3 class="box-title">HORA</h3></td>
                          <td><h2 class="box-title">Lunes</h2></td>
                          <td><h2 class="box-title">Martes</h2></td>
                          <td><h2 class="box-title">Miercoles</h2></td>
                          <td><h2 class="box-title">Jueves</h2></td>
                          <td><h2 class="box-title">Viernes</h2></td>
                        </tr>
                        <tr>
                          <td><h6 class="box-title">07:45 - 10:00</h6></td>
                          <br>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                              @if ($programacion->id_horario == '1') 
                                <input type="radio" name="id_materia_lab" id="lunes1" value="{{$programacion->id}}">
                                <label for="lunes1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                              @endif
                          @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '5')
                                  <input type="radio" name="id_materia_lab" id="martes1" value="{{$programacion->id}}">
                                  <label for="martes1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '9')
                                  <input type="radio" name="id_materia_lab" id="miercoles1" value="{{$programacion->id}}">
                                  <label for="miercoles1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '13')
                                  <input type="radio" name="id_materia_lab" id="jueves1" value="{{$programacion->id}}">
                                  <label for="jueves1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '17')
                                  <input type="radio" name="id_materia_lab" id="viernes1" value="{{$programacion->id}}">
                                  <label for="viernes1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                        </tr>
                        <tr >
                          <td><h6 class="box-title">10:00 - 12:15</h6></td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '2')
                                  <input type="radio" name="id_materia_lab" id="lunes2" value="{{$programacion->id}}">
                                  <label for="lunes2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '6')
                                  <input type="radio" name="id_materia_lab" id="martes2" value="{{$programacion->id}}">
                                  <label for="martes2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '10')
                                  <input type="radio" name="id_materia_lab" id="miercoles2" value="{{$programacion->id}}">
                                  <label for="miercoles2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '14')
                                  <input type="radio" name="id_materia_lab" id="jueves2" value="{{$programacion->id}}">
                                  <label for="jueves2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '18')
                                  <input type="radio" name="id_materia_lab" id="viernes2" value="{{$programacion->id}}">
                                  <label for="viernes2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><h6 class="box-title">12:15 - 14:00</h6></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><h6 class="box-title">14:00 - 16:15</h6></td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                  @if ($programacion->id_horario == '3')
                                    <input type="radio" name="id_materia_lab" id="lunes3" value="{{$programacion->id}}">
                                    <label for="lunes3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  @endif
                              @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '7')
                                  <input type="radio" name="id_materia_lab" id="martes3" value="{{$programacion->id}}">
                                  <label for="martes3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '11')
                                  <input type="radio" name="id_materia_lab" id="miercoles3" value="{{$programacion->id}}">
                                  <label for="miercoles3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '15')
                                  <input type="radio" name="id_materia_lab" id="jueves3" value="{{$programacion->id}}">
                                  <label for="jueves3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '19')
                                  <input type="radio" name="id_materia_lab" id="viernes3" value="{{$programacion->id}}">
                                  <label for="viernes3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                        </tr>
                        <tr>
                          <td><h6 class="box-title">16:15 - 18:30</h6></td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                  @if ($programacion->id_horario == '4')
                                    <input type="radio" name="id_materia_lab" id="lunes4" value="{{$programacion->id}}">
                                    <label for="lunes4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  @endif
                              @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '8')
                                  <input type="radio" name="id_materia_lab" id="martes4" value="{{$programacion->id}}">
                                  <label for="martes4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '12')
                                  <input type="radio" name="id_materia_lab" id="miercoles4" value="{{$programacion->id}}">
                                  <label for="miercoles4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '16')
                                  <input type="radio" name="id_materia_lab" id="jueves4" value="{{$programacion->id}}">
                                  <label for="jueves4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                          <td>
                            @foreach($progamacionmathors as $programacion)
                                @if ($programacion->id_horario == '20')
                                  <input type="radio" name="id_materia_lab" id="viernes4" value="{{$programacion->id}}">
                                  <label for="viernes4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                @endif
                            @endforeach()
                          </td>
                        </tr>
                      </table>
                    </div>
                    <input type="hidden" name="numero_recibo" value="0" >
                    <input type="hidden" name="id_usu_estudiante" value="{{ Auth::user()->id }}" >
                    
                    <div class="box-footer clearfix no-border">
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> GUARDAR</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </section>
        </div>
      </section>


@endsection
     