@extends('plantilla')
@section('seccion')
    <section class="content-header">
        <h1>
            Lista de Alumnos programados sin Recibo
        </h1>
    </section>
    <section class="content">
        <section class="col-lg-10 connectedSortable">
            @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje')}}</div>
            @endif 
            <div calss= "container my-4">
                <div class="box box-primary">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#id</th>
                                <th scope="col">C.I.</th>
                                <th scope="col">Nombre del alumno</th>
                                <th scope="col">Nombre de la materia</th>
                                <th scope="col">Numero de Recibo</th>
                                <th scope="col">Guardar</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach($programacionlab as $item)
                                @if($item->numero_recibo == 0 || $item->numero_recibo == '' )
                                    <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user->name}}</td>
                                    <td>{{$item->materia->nomb_materia}}</td>
                                    <form action="{{ route('updatelab', $item->id) }}" method="POST">
                                        {{method_field('PUT')}}

                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">    
                                        @if ($errors->has('numero_recibo'))
                                            <div class="alert alert-danger">
                                                no inserto el numero de Recibo
                                            </div>
                                        @endif
                                        <td>
                                            
                                            <input type="number" id="numero_recibo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="numero_recibo" class="form-control mb2" value="{{ $item->numero_recibo }}" >
                                            
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable8">Guardar</button>
                                        </td>
                                    </form>
                                    </tr>
                                @endif
                            @endforeach()
                        </tbody>
                    </table>
                   
                </div>
                <div class="col-xs-4">
                    <button  class="btn btn-primary btn-block btn-flat">Imprimir Lista</button>
                </div> 
            </div>
        </section>
    </section>
@endsection