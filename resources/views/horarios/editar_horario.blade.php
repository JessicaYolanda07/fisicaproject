@extends('plantilla')
@section('seccion')
  <section class="content">
    <section class="col-lg-10 connectedSortable">
      <h1>
        Editar horario {{ $horario->id }}
      </h1>
      @if (session('mensaje'))
        <div class="alert alert-success">
          {{ session('mensaje')}}
        </div>
      @endif 

      <form action="{{ route('updateh', $horario->id) }}" method="POST">
        {{method_field('PUT')}}
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        @if ($errors->has('dia'))
          <div class="alert alert-danger">
            El dia es obligatorio
          </div>
        @endif

        @if ($errors->has('hora_desde'))
          <div class="alert alert-danger">
            La hora de inicio obligatorio
          </div>
        @endif

        @if ($errors->has('hora_hasta'))
          <div class="alert alert-danger">
            La hora de finalizacion es obligatorio
          </div>
        @endif

        <div class="form-group has-feedback">
          <label>Dia</label>
          <input type="text"
            id="dia"
            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
            class="form-control" 
            name="dia"
            placeholder="dia" 
            class="form-control mb2" 
            value="{{ $horario->dia }}">
        </div>
        <div class="form-group has-feedback">
          <label>hora de inicio</label>
          <input type="text" 
            id="hora_inicio"
            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
            class="form-control"
            name="hora_desde" 
            placeholder="hora de inicio" 
            class="form-control mb2" 
            value="{{ $horario->hora_desde }}" >
                    
        </div>
        <div class="form-group has-feedback">
          <label>horario de finalizacio</label>
          <input type="text" 
            id="hora_fin" 
            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
            class="form-control" 
            name="hora_hasta"
            placeholder="horario de finalizacion" 
            class="form-control mb2"
            value="{{ $horario->hora_hasta }}" >
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">editar</button>
        </div>
                
      </form>
    </section>
  </section>
@endsection
            