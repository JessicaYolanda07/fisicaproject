@extends('plantilla')
@section('seccion')

  <section class="content-header">
    <h1>
      Lista de Docentes
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <section class="col-lg-10 connectedSortable">
      <!-- TO DO List -->
      @if (session('mensaje'))
        <div class="alert alert-siccess">{{ session('mensaje')}}</div>
      @endif 
      <div calss= "container my-4">
        <div class="box box-primary">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido_P</th>
                <th scope="col">Apellido_M</th>
                <th scope="col">C.I.</th>
                <th scope="col">Fecha_Nac</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Profesion</th>
                <th scope="col">Carrera</th>
                <th scope="col">Estado</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
                
            <tbody>
                @foreach($docentes as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apellido_p}}</td>
                        <td>{{$item->apellido_m}}</td>
                        <td>{{$item->ci}}</td>
                        <td>{{$item->fecha_nac}}</td>
                        <td>{{$item->correo}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>{{$item->profesion}}</td>
                        <td>{{$item->carrera}}</td>
                        <td>{{$item->estado}}</td>
                        <td>
                            <a href="{{route('editard', $item)}}" class="btn btn-warning btn-sm">
                                <span class="glyphicon glyphicon-pencil">
                            </a>
                        </td>
                        <td>
                            <form action="{{route('eliminard', $item)}}" method="POST" class="d-inline">
                                {{method_field('DELETE')}}
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                <button class="btn btn-danger btn-sm" type="submit">
                                    <span class="glyphicon glyphicon-remove">
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach()
        
            </tbody>
          </table>
          {{ $docentes->links()}}
        </div>
        <hr class='separador_post'/>
            <form action="{{ route('creard') }}" method="POST" >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
                 @if (session('mensaje'))
                    <div class="alert alert-success">
                        {{session('mensaje')}}
                    </div>
                @endif
            
                <form action="{{route('creard')}}" method="POST" role="form">
                    <!--toquen de seguridad -->
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    @error('nombre')
                        <div class="alert alert-danger">
                            EL NOMBRE ES OBLIGADO
                        </div>
                    @enderror

                    @error('apellido_p')
                        <div class="alert alert-danger">
                            EL APELLIDO PATERNO ES OBLIGADO
                        </div>
                    @enderror

                    @error('apellido_m')
                        <div class="alert alert-danger">
                            EL APELLIDO MATERNO ES OBLIGADO
                        </div>
                    @enderror

                    @error('ci')
                        <div class="alert alert-danger">
                            EL CI ES OBLIGADO
                        </div>
                    @enderror

                    @error('fecha_nac')
                        <div class="alert alert-danger">
                            LA FECHA DE NACIMIENTO ES OBLIGADO
                        </div>
                    @enderror

                    @error('correo')
                        <div class="alert alert-danger">
                            EL CORREO ES OBLIGADO
                        </div>
                    @enderror

                    @error('telefono')
                        <div class="alert alert-danger">
                            EL TELEFONO ES OBLIGADO
                        </div>
                    @enderror

                    @error('profesion')
                        <div class="alert alert-danger">
                            LA PROFESION ES OBLIGADO
                        </div>
                    @enderror

                    @error('carrera')
                        <div class="alert alert-danger">
                            LA CARRERA ES OBLIGADO
                        </div>
                    @enderror

                    @error('estado')
                        <div class="alert alert-danger">
                            EL ESTADO ES OBLIGADO
                        </div>
                    @enderror

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="" placeholder="Escriba su nombre"  value="{{old('nombre')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido Paterno</label>
                        <input type="text" class="form-control" name="apellido_p" id="" placeholder="Escriba su primer apellido"  value="{{old('apellido_p')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Apellido Materno</label>
                        <input type="text" class="form-control" name="apellido_m" id="" placeholder="Escriba su segundo apellido"  value="{{old('apellido_m')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Carnet de Identidad</label>
                        <input type="number" class="form-control" name="ci" id="" placeholder="Escriba su numero de carnet" value="{{old('ci')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nac" id="" placeholder="Escriba su fecha de nacimiento"  value="{{old('fecha_nac')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Correo</label>
                        <input type="text" class="form-control" name="correo" id="" placeholder="Escriba su numero de correo" value="{{old('correo')}}">
                    </div>
                  
                    <div class="form-group has-feedback">
                        <label>Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="telefono" class="form-control mb2" value="{{ old('telefono')}}" >
                    </div>
                    <div class="form-group">
                        <label for="">Profesion</label>
                        <input type="text" class="form-control" name="profesion" id="" placeholder="Escriba su profesion"  value="{{old('profesion')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Carrera</label>
                        <input type="text" class="form-control" name="carrera" id="" placeholder="Escriba su carrera"  value="{{old('carrera')}}">
                    </div>
                    <div class="form-group">
                        <label for="">Estado</label>
                        <input type="text" class="form-control" name="estado" id="" placeholder="Escriba su estado"  value="{{old('estado')}}">
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
        
            </section>
        </section>    
    </tbody>
  </table>
@endsection