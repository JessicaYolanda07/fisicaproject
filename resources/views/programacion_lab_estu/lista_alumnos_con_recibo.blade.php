@extends('plantilla')
@section('seccion')
    <section class="content-header">
        <h1>
            Lista de Alumnos programados con Recibo
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
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach($programacionlab as $item)
                                @if($item->numero_recibo != 0 || $item->numero_recibo != '' )
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td>{{$item->materia->nomb_materia}}</td>
                                        <td>{{$item->numero_recibo}}</td>
                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalScrollable">
                                                Editar número de recibo <span class="glyphicon glyphicon-pencil">
                                            </button>
                                            <!-- Modal -->
                                         
                                            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <form action="{{ route('updatelab', $item->id) }}" method="POST">
                                                                {{method_field('PUT')}}

                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">    
                                                                @if ($errors->has('numero_recibo'))
                                                                    <div class="alert alert-danger">
                                                                        no inserto el numero de Recibo
                                                                    </div>
                                                                @endif
                                                                <section class="text-center">
                                                                    <h1>
                                                                        Escriba el Número de Recibo
                                                                    </h1>
                                                                </section>
                                                                <br>
                                                                <div class="form-group has-feedback">
                                                                    <input type="number" id="numero_recibo" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()" class="form-control" name="numero_recibo" class="form-control mb2" value="{{ $item->numero_recibo }}" >
                                                                </div>
                                                            
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </form>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>      
                            </tr>
                            @endif
                            @endforeach()
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-4">
                    <button  class="btn btn-primary btn-block btn-flat text-center">Imprimir Lista</button>
                </div>  
            </div>
        </section>
    </section>
@endsection