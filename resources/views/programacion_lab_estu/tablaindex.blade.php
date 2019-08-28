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
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="lunes1" value="1">
                                <label for="lunes1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="lunes11" value="2">
                                  <label for="lunes11">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="lunes111" value="3">
                                    <label for="lunes111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="lunes1111" value="4">
                                  <label for="lunes1111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="lunes11111" value="5">
                                    <label for="lunes11111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="lunes111111" value="6">
                                      <label for="lunes111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif                         
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="lunes1111111" value="7">
                                    <label for="lunes1111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="lunes11111111" value="8">
                                      <label for="lunes11111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="lunes111111111" value="9">
                                        <label for="lunes111111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                            @endif                           
                          @endif  
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '5') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="martes1" value="10">
                                <label for="martes1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="martes11" value="11">
                                  <label for="martes11">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="martes111" value="12">
                                    <label for="martes111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="martes1111" value="13">
                                  <label for="martes1111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="martes11111" value="14">
                                    <label for="martes11111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="martes111111" value="15">
                                      <label for="martes111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="martes1111111" value="16">
                                    <label for="martes11111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="martes11111111" value="17">
                                      <label for="martes11111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="martes111111111" value="18">
                                        <label for="martes111111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '9') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="miercoles1" value="19">
                                <label for="miercoles1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="miercoles11" value="20">
                                  <label for="miercoles11">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="miercoles111" value="21">
                                    <label for="miercoles111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="miercoles1111" value="22">
                                  <label for="miercoles1111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="miercoles11111" value="23">
                                    <label for="miercoles11111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="miercoles111111" value="24">
                                      <label for="miercoles111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="miercoles1111111" value="25">
                                    <label for="miercoles1111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="miercoles11111111" value="26">
                                      <label for="miercoles11111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="miercoles111111111" value="27">
                                        <label for="miercoles111111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '13') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="jueves1" value="28">
                                <label for="jueves1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="jueves11" value="29">
                                  <label for="jueves11">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="jueves111" value="30">
                                    <label for="jueves111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="jueves1111" value="31">
                                  <label for="jueves1111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="jueves11111" value="32">
                                    <label for="jueves11111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="jueves111111" value="33">
                                      <label for="jueves111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="jueves1111111" value="34">
                                    <label for="jueves1111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="jueves11111111" value="35">
                                      <label for="jueves11111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="jueves111111111" value="36">
                                        <label for="jueves111111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '17') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="viernes1" value="37">
                                <label for="viernes1">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="viernes11" value="38">
                                  <label for="viernes11">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="viernes111" value="39">
                                    <label for="viernes111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="viernes1111" value="40">
                                  <label for="viernes1111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="viernes11111" value="41">
                                    <label for="viernes11111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="viernes111111" value="42">
                                      <label for="viernes111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="viernes1111111" value="43">
                                    <label for="viernes1111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="viernes11111111" value="44">
                                      <label for="viernes11111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="viernes111111111" value="45">
                                        <label for="viernes111111111">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                    </tr>
                    <tr >
                      <td><h6 class="box-title">10:00 - 12:15</h6></td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '2') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="lunes2" value="46">
                                <label for="lunes2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="lunes22" value="47">
                                  <label for="lunes22">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="lunes222" value="48">
                                    <label for="lunes222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif

                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="lunes2222" value="49">
                                  <label for="lunes2222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="lunes22222" value="50">
                                    <label for="lunes22222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="lunes222222" value="51">
                                      <label for="lunes222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif

                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="lunes2222222" value="52">
                                    <label for="lunes2222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="lunes22222222" value="53">
                                      <label for="lunes22222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="lunes222222222" value="54">
                                        <label for="lunes222222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '6') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="martes2" value="55">
                                <label for="martes2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="martes22" value="56">
                                  <label for="martes22">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="martes222" value="57">
                                    <label for="martes222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="martes2222" value="58">
                                  <label for="martes2222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="martes22222" value="59">
                                    <label for="martes22222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="martes222222" value="60">
                                      <label for="martes222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="martes2222222" value="61">
                                    <label for="martes2222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="martes22222222" value="62">
                                      <label for="martes22222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="martes222222222" value="63">
                                        <label for="martes222222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '10') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="miercoles2" value="64">
                                <label for="miercoles2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="miercoles22" value="65">
                                  <label for="miercoles22">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="miercoles222" value="66">
                                    <label for="miercoles222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="miercoles2222" value="67">
                                  <label for="miercoles2222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="miercoles22222" value="68">
                                    <label for="miercoles22222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="miercoles222222" value="69">
                                      <label for="miercoles222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="miercoles2222222" value="70">
                                    <label for="miercoles2222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="miercoles22222222" value="71">
                                      <label for="miercoles2222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="miercoles222222222" value="72">
                                        <label for="miercoles222222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '14') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="jueves2" value="73">
                                <label for="jueves2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="jueves22" value="74">
                                  <label for="jueves22">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="jueves222" value="75">
                                    <label for="jueves222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="jueves2222" value="76">
                                  <label for="jueves2222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="jueves22222" value="77">
                                    <label for="jueves22222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="jueves222222" value="78">
                                      <label for="jueves222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="jueves2222222" value="79">
                                    <label for="jueves2222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="jueves22222222" value="80">
                                      <label for="jueves22222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="jueves222222222" value="81">
                                        <label for="jueves222222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '18') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="viernes2" value="82">
                                <label for="viernes2">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="viernes22" value="83">
                                  <label for="viernes22">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="viernes222" value="84">
                                    <label for="viernes222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="viernes2222" value="85">
                                  <label for="viernes2222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="viernes22222" value="86">
                                    <label for="viernes22222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="viernes222222" value="87">
                                      <label for="viernes222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="viernes2222222" value="88">
                                    <label for="viernes2222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="viernes22222222" value="89">
                                      <label for="viernes22222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="viernes222222222" value="90">
                                        <label for="viernes222222222">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
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
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="lunes3" value="91">
                                <label for="lunes3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="lunes33" value="92">
                                  <label for="lunes33">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="lunes333" value="93">
                                    <label for="lunes333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="lunes3333" value="94">
                                  <label for="lunes3333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="lunes33333" value="95">
                                    <label for="lunes33333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="lunes333333" value="96">
                                      <label for="lunes333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="lunes3333333" value="97">
                                    <label for="lunes3333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="lunes33333333" value="98">
                                      <label for="lunes33333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="lunes333333333" value="99">
                                        <label for="lunes333333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '7') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="martes3" value="100">
                                <label for="martes3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="martes33" value="101">
                                  <label for="martes33">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="martes333" value="102">
                                    <label for="martes333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="martes3333" value="103">
                                  <label for="martes3333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="martes33333" value="104">
                                    <label for="martes33333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="martes333333" value="105">
                                      <label for="martes333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="martes3333333" value="106">
                                    <label for="martes3333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="martes33333333" value="107">
                                      <label for="martes33333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="martes333333333" value="108">
                                        <label for="martes333333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '11') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="miercoles3" value="109">
                                <label for="miercoles3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="miercoles33" value="110">
                                  <label for="miercoles33">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="miercoles333" value="111">
                                    <label for="miercoles333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="miercoles3333" value="112">
                                  <label for="miercoles3333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="miercoles33333" value="113">
                                    <label for="miercoles33333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="miercoles333333" value="114">
                                      <label for="miercoles333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="miercoles3333333" value="115">
                                    <label for="miercoles3333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="miercoles33333333" value="116">
                                      <label for="miercoles33333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="miercoles333333333" value="117">
                                        <label for="miercoles333333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '15') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="jueves3" value="118">
                                <label for="jueves3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="jueves33" value="119">
                                  <label for="jueves33">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="jueves333" value="120">
                                    <label for="jueves333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="jueves3333" value="121">
                                  <label for="jueves3333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="jueves33333" value="122">
                                    <label for="jueves33333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="jueves333333" value="123">
                                      <label for="jueves333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="jueves3333333" value="124">
                                    <label for="jueves3333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="jueves33333333" value="125">
                                      <label for="jueves33333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="jueves333333333" value="126">
                                        <label for="jueves333333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '19') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="viernes3" value="127">
                                <label for="viernes3">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="viernes33" value="128">
                                  <label for="viernes33">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="viernes333" value="129">
                                    <label for="viernes333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="viernes3333" value="130">
                                  <label for="viernes3333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="viernes33333" value="131">
                                    <label for="viernes33333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="viernes333333" value="132">
                                      <label for="viernes333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="viernes3333333" value="133">
                                    <label for="viernes3333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="viernes33333333" value="134">
                                      <label for="viernes33333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="viernes333333333" value="135">
                                        <label for="viernes333333333">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                    </tr>
                    <tr>
                      <td><h6 class="box-title">16:15 - 18:30</h6></td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '4') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="lunes4" value="136">
                                <label for="lunes4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="lunes44" value="137">
                                  <label for="lunes44">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="lunes444" value="138">
                                    <label for="lunes444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="lunes4444" value="139">
                                  <label for="lunes4444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="lunes44444" value="140">
                                    <label for="lunes44444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="lunes444444" value="141">
                                      <label for="lunes444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="lunes4444444" value="142">
                                    <label for="lunes4444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="lunes44444444" value="143">
                                      <label for="lunes44444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="lunes444444444" value="144">
                                        <label for="lunes444444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '8') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="martes4" value="145">
                                <label for="martes4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="martes44" value="146">
                                  <label for="martes44">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="martes444" value="147">
                                    <label for="martes444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="martes4444" value="148">
                                  <label for="martes4444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="martes44444" value="149">
                                    <label for="martes44444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="martes444444" value="150">
                                      <label for="martes444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="martes4444444" value="151">
                                    <label for="martes4444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="martes44444444" value="152">
                                      <label for="martes44444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="martes444444444" value="153">
                                        <label for="martes444444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '12') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="miercoles4" value="153">
                                <label for="miercoles4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="miercoles44" value="154">
                                  <label for="miercoles44">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="miercoles444" value="155">
                                    <label for="miercoles444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="miercoles4444" value="156">
                                  <label for="miercoles4444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="miercoles44444" value="157">
                                    <label for="miercoles44444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="miercoles444444" value="158">
                                      <label for="miercoles444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="miercoles4444444" value="159">
                                    <label for="miercoles4444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="miercoles44444444" value="160">
                                      <label for="miercoles44444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="miercoles444444444" value="161">
                                        <label for="miercoles444444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '16') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="jueves4" value="162">
                                <label for="jueves4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="jueves44" value="163">
                                  <label for="jueves44">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="jueves444" value="164">
                                    <label for="jueves444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="jueves4444" value="165">
                                  <label for="jueves4444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="jueves44444" value="166">
                                    <label for="jueves44444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="jueves444444" value="167">
                                      <label for="jueves444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="jueves4444444" value="168">
                                    <label for="jueves4444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="jueves44444444" value="169">
                                      <label for="jueves44444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="jueves444444444" value="170">
                                        <label for="jueves444444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
                          @endif      
                        @endforeach()
                      </td>
                      <td>
                        @foreach($progamacionmathors as $programacion)
                          @if ($programacion->id_horario == '20') 
                            @if (Auth::user()->programacionnormalestu['id_materia_progra'] == '1' and $programacion->id_materia == '1' )
                              @if ($programacion->grupo == '1')
                                <input type="radio" name="id_materia_lab" id="viernes4" value="171">
                                <label for="viernes4">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                <br>
                                @elseif ($programacion->grupo == '2')
                                  <input type="radio" name="id_materia_lab" id="viernes44" value="172">
                                  <label for="viernes44">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '3')
                                    <input type="radio" name="id_materia_lab" id="viernes444" value="173">
                                    <label for="viernes444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                              @endif
                              
                              @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '2' and $programacion->id_materia == '2' )
                                @if ($programacion->grupo == '1')
                                  <input type="radio" name="id_materia_lab" id="viernes4444" value="174">
                                  <label for="viernes4444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                  <br>
                                  @elseif ($programacion->grupo == '2')
                                    <input type="radio" name="id_materia_lab" id="viernes44444" value="175">
                                    <label for="viernes44444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '3')
                                      <input type="radio" name="id_materia_lab" id="viernes444444" value="176">
                                      <label for="viernes444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                @endif
                                
                                @elseif (Auth::user()->programacionnormalestu['id_materia_progra'] == '3' and $programacion->id_materia == '3' )
                                  @if ($programacion->grupo == '1')
                                    <input type="radio" name="id_materia_lab" id="viernes4444444" value="177">
                                    <label for="viernes4444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                    <br>
                                    @elseif ($programacion->grupo == '2')
                                      <input type="radio" name="id_materia_lab" id="viernes44444444" value="178">
                                      <label for="viernes44444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                      <br>
                                      @elseif ($programacion->grupo == '3')
                                        <input type="radio" name="id_materia_lab" id="viernes444444444" value="179">
                                        <label for="viernes444444444">{{$programacion->materia->nomb_materia}}-{{$programacion->ambiente}}-G{{$programacion->grupo}}</label>
                                        <br>
                                  @endif
                                  
                            @endif                           
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