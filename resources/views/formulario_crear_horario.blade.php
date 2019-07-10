@extends('plantilla')
@section('seccion')
  <section class="content-header">
    <h1>
      Lista de Horarios
    </h1>
  </section>
  <!-- Main content -->
  <section class="content">
    <section class="col-lg-10 connectedSortable">
      <!-- TO DO List -->
      @if (session('mensaje'))
        <div class="alert alert-siccess">
          {{ session('mensaje')}}
        </div>
      @endif 
     
      <div calss= "container my-4">
        <div class="box box-primary">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Día</th>
                <th scope="col">Hora desde</th>
                <th scope="col">Hora hasta</th>
                       
                <th scope="col">Editar horario</th>
                <th scope="col">Eliminar horario</th>
              </tr>
            </thead>
            <tbody>
              @foreach($horarios as $item)
                <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->dia}}</td>
                  <td>{{$item->hora_desde}}</td>
                  <td>{{$item->hora_hasta}}</td>
                  <td>
                    <a href="{{ route('editarh', $item) }}" class="btn btn-warning" btn-sm>
                      <span class="glyphicon glyphicon-pencil">
                    </a>
                  </td>
                  <td>
                    <form action="{{route('eliminar', $item)}}" method="POST" class="d-inline">
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
          {{ $horarios->links()}}
        </div>
        <hr class='separador_post'/>
        <form action="{{ route('crear') }}" method="POST" >
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
          @if ($errors->has('dia'))
            <div class="alert alert-danger">
              El día es obligatorio
            </div>
          @endif

          @if ($errors->has('hora_desde'))
            <div class="alert alert-danger">
              La hora de inicio es obligatorio
            </div>
          @endif

          @if ($errors->has('hora_hasta'))
            <div class="alert alert-danger">
              La hora de finalizacion es obligatorio
            </div>
          @endif
                 
          <section class="content-header">
            <h1>
              Añadir horario
            </h1>
          </section>
          <br>
          <div class="form-group has-feedback">
            <label>Dia</label>
            <input type="text" class="form-control" name="dia" placeholder="Dia" class="form-control mb2" value="{{ old('dia')}}">
          </div>

          <div class="form-group has-feedback">
            <label>hora de inicio</label>
            <input type="text" class="form-control" name="hora_desde" placeholder="Hora de inicio" class="form-control mb2" value="{{ old('hora_desde')}}" >
          </div>

          <div class="form-group has-feedback">
            <label>hora de finalizacion</label>
            <input type="text" class="form-control" name="hora_hasta" placeholder="hora de finalizacion" class="form-control mb2" value="{{ old('hora_hasta')}}" >
          </div>
                   
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Guardar</button>
          </div>
                
        </form>
      </div>
    </section>
  </section>
@endsection