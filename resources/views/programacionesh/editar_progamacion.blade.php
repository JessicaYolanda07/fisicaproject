@extends('plantilla')
@section('seccion')
    <section class="content">
        <section class="col-lg-10 connectedSortable">
            <h1>
                Editar programacion {{ $progamacionmathor->id }}
            </h1>
            @if (session('mensaje'))
                <div class="alert alert-success">
                    {{ session('mensaje')}}
                </div>
            @endif 
            <form action="{{ route('updatep', $progamacionmathor->id) }}" method="POST">
                {{method_field('PUT')}}

                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    
                @if ($errors->has('id_materia'))
                    <div class="alert alert-danger">
                        El nombre de la materia es obligatorio
                    </div>
                @endif

                @if ($errors->has('id_docente'))
                    <div class="alert alert-danger">
                        El nombre del docebte es obligatorio
                    </div>
                @endif
                @if ($errors->has('id_horario'))
                    <div class="alert alert-danger">
                        El horario es obligatorio
                    </div>
                @endif
                @if ($errors->has('grupo'))
                    <div class="alert alert-danger">
                        El grupo es obligatorio
                    </div>
                @endif
                                        
                @if ($errors->has('ambiente'))
                    <div class="alert alert-danger">
                        El ambiente es obligatorio
                    </div>
                @endif

                @if ($errors->has('gestion'))
                    <div class="alert alert-danger">
                        La gestion es obligatoria
                    </div>
                @endif

                @if ($errors->has('cupo_max'))
                    <div class="alert alert-danger">
                        El cupo maximo de alumnos es obligatorio
                    </div>
                @endif

                <br>
                <div class="form-group">
                    <label for="">Nombre de la materia</label>
                    <select name="id_materia" class="form-control" id="inputMateria_id">
                        @foreach($materias as $item)
                            <option value="{{$item->id}}">{{$item->nomb_materia}}</option>   
                        @endforeach()  
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nombre del docente</label>
                    <select name="id_docente" class="form-control" id="inputDocente_id">
                        @foreach($docentes as $item)
                            <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido_p}} {{$item->apellido_m}}</option>
                        @endforeach()  
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Horario</label>
                    <select name="id_horario" class="form-control" id="inputHorario_id">
                        @foreach($horarios as $item)
                            <option value="{{$item->id}}">{{$item->dia}}: {{$item->hora_desde}} - {{$item->hora_hasta}}</option>
                        @endforeach()  
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect3">Grupo</label>
                    <select class="form-control" 
                        id="exampleFormControlSelect3" 
                        name="grupo" value="{{ $progamacionmathor->grupo }}">
                        
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                                                    
                    </select>
                </div>
                    
                <div class="form-group has-feedback">
                    <label>Ambiente</label>
                    <input type="text" 
                        id="ambiente" 
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                        class="form-control" 
                        name="ambiente" 
                        placeholder="ambiente de la materia" 
                        class="form-control mb2" 
                        value="{{ $progamacionmathor->ambiente }}" 
                    >
                </div>

                <div class="form-group has-feedback">
                    <label>Gestion</label>
                    <input type="text" 
                        id="gestio" 
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                        class="form-control" 
                        name="gestion" 
                        class="form-control mb2"
                        value="{{ $progamacionmathor->gestion }}"
                    >
                </div>

            
                <div class="form-group has-feedback">
                    <label>cupo max</label>
                    <input type="text" 
                        id="cupo_alum" 
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                        class="form-control" 
                        name="cupo_max"
                        class="form-control mb2" 
                        value="{{ $progamacionmathor->cupo_max }}"
                    >
                </div>
                                            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">editar</button>
                </div>
                                            
            </form>
        </section>
    </section>
@endsection