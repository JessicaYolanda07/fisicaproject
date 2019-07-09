@extends('plantilla')
@section('seccion')
  <!-- Main content -->
  <section class="content">
    <section class="col-lg-10 connectedSortable">
      <!-- TO DO List -->
      <h1>
        Editar materia {{ $materia->id }}
      </h1>
      @if (session('mensaje'))
        <div class="alert alert-siccess">
          {{ session('mensaje')}}
        </div>
      @endif 

      <form action="{{ route('update', $materia->id) }}" method="POST">
        {{method_field('PUT')}}
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              
        @if ($errors->has('nomb_materia'))
          <div class="alert alert-danger">
            El nombre de materia es obligatorio
          </div>
        @endif

        @if ($errors->has('sigla_materia'))
          <div class="alert alert-danger">
            La sigla de materia es obligatorio
          </div>
        @endif

        @if ($errors->has('carrera_materia'))
          <div class="alert alert-danger">
            La carrera materia es obligatorio
          </div>
        @endif

        <div class="form-group has-feedback">
          <label>Nombre de materia</label>
          <input type="text" class="form-control" 
            name="nomb_materia"
            placeholder="Nombre de materia" 
            class="form-control mb2" 
            value="{{ $materia->nomb_materia }}">
        </div>
        <div class="form-group has-feedback">
          <label>Sigla de materia</label>
          <input type="text" class="form-control"
            name="sigla_materia" 
            placeholder="Nombre de materia" 
            class="form-control mb2" 
            value="{{ $materia->sigla_materia }}" >
        </div>
        <div class="form-group has-feedback">
          <label>Grupo de la materia</label>
          <input type="text" class="form-control" 
            name="carrera_materia"
            placeholder="Carrera de la materia" 
            class="form-control mb2"
            value="{{ $materia->carrera_materia }}" >
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">editar</button>
        </div><!-- /.col -->
      </form>
    </section><!-- /.Left col -->
  </section><!-- /.content -->
  <h1>ojoooooo<h1>
@endsection

