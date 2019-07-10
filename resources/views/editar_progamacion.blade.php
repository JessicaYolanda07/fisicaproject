@extends('plantilla')
@section('seccion')
    <section class="content">
        <section class="col-lg-10 connectedSortable">
            <h1>
                Editar programacion {{ $progamacionmathors->id }}
            </h1>
            @if (session('mensaje'))
                <div class="alert alert-siccess">
                    {{ session('mensaje')}}
                </div>
            @endif 
            <form action="{{ route('update', $progamacionmathors->id) }}" method="POST">
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

                <section class="content-header">
                    <h1>
                        Añadir materia
                    </h1>
                </section>
                <br>
                <div class="form-group">
                    <label for="">Nombre de la materia</label>
                    <select name="id_materia" class="form-control" id="inputMateria_id">
                        <option value="{{ $progamacionmathors->id_materia }}">--escoja la materia</option>
                        @foreach($materias as $item)
                            <option value="{{$item->id}}">{{$item->nomb_materia}}</option>   
                        @endforeach()  
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nombre del docente</label>
                    <select name="id_docente" class="form-control" id="inputDocente_id">
                        <option value="{{ $progamacionmathors->id_docente }}">--escoja al docente--</option>
                        @foreach($materias as $item)
                            <option value="{{$item->id}}">{{$item->nomb_materia}}</option>
                        @endforeach()  
                    </select>
                </div>
                <div class="form-group has-feedback">
                    <input type="hidden" name="id_horario" value="1" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Grupo</label>
                    <select class="form-control" 
                        id="exampleFormControlSelect3" 
                        name="grupo" value="{{ $progamacionmathors->grupo }}">
                        <option value="">--escoja un grupo--</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                                                    
                    </select>
                </div>
                    
                <div class="form-group has-feedback">
                    <label>Ambiente</label>
                    <input type="text" 
                    class="form-control" 
                    name="ambiente" 
                    placeholder="ambiente de la materia" 
                    class="form-control mb2" 
                    value="{{ $progamacionmathors->ambiente }}" 
                    >
                </div>

                <div class="form-group has-feedback">
                    <label>Gestion</label>
                    <input type="text" 
                    class="form-control" 
                    name="gestion" 
                
                    class="form-control mb2"
                    value="{{ $progamacionmathors->gestion }}" >
                </div>

            
                <div class="form-group has-feedback">
                    <label>cupo max</label>
                    <input type="text" class="form-control" 
                        name="cupo_max"
                        
                        class="form-control mb2" 
                        value="{{ $progamacionmathors->cupo_max }}">
                </div>
                                            
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">editar</button>
                </div>
                                            
            </form>
        </section>
    </section>
@endsection

