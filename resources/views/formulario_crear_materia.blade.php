@extends('plantilla')
@section('seccion')
  <section class="content-header">
    <h1>
      Lista de Materias
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
                <th scope="col">Nombre de materia</th>
                <th scope="col">Sigla de materia</th>
                <th scope="col">Carrera de materia</th>
            
                <th scope="col">Editar materia</th>
                <th scope="col">Eliminar materia</th>
              </tr>
            </thead>
                
            <tbody>
              @foreach($materias as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->nomb_materia}}</td>
                  <td>{{$item->sigla_materia}}</td>
                  <td>{{$item->carrera_materia}}</td>
                          
                  <td>
                    <a href="{{ route('editarm', $item) }}" class="btn btn-warning" btn-sm>
                      <span class="glyphicon glyphicon-pencil">
                    </a>
                  </td>
                          
                  <td>
                    <form action="{{route('eliminarm', $item)}}" method="POST" class="d-inline">
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
          {{ $materias->links()}}
        </div>
        <hr class='separador_post'/>
        <form action="{{ route('crearm') }}" method="POST" >
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              
          @if ($errors->has('nomb_materia'))
            <div class="alert alert-danger">
              El nombre de materia es obligatorio
            </div>
          @endif

          @if ($errors->has('sigla_materia'))
            <div class="alert alert-danger">
              La sigla de materia es obligatoria
            </div>
          @endif

          @if ($errors->has('carrera_materia'))
            <div class="alert alert-danger">
              La carrera de la materia es obligatoria
            </div>
          @endif
                 
          <section class="content-header">
            <h1>
              Añadir materia
            </h1>
          </section>

          <br>
          <div class="form-group has-feedback">
            <label>Nombre de materia</label>
            <input type="text" id="materia" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="nomb_materia" placeholder="Nombre de materia" class="form-control mb2" value="{{ old('nomb_materia')}}">
          </div>

          <div class="form-group has-feedback">
            <label>Sigla de materia</label>
            <input type="text" id="sigla" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="sigla_materia" placeholder="Sigla de materia" class="form-control mb2" value="{{ old('sigla_materia')}}" >
          </div>

          <div class="form-group has-feedback">
            <label>Carrera de la materia</label>
            <input type="text" id="carrera" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="carrera_materia" placeholder="Carrera de la materia" class="form-control mb2" value="{{ old('carrera_materia')}}" >
          </div>
                    
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
          </div>                  
        </form>
      </div>
    </section>
  </section>
@endsection