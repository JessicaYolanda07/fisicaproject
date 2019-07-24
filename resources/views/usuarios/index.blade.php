@extends('plantilla')
@section('seccion')
    <section class="content-header">
        <h1>
            Lista de Usuarios
        </h1>
    </section>
    <section class="content">
        <section class="col-lg-10 connectedSortable">
            @if (session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje')}}</div>
            @endif 
            <div calss= "container my-4">
                <div class="box box-primary">
                    <div class="box-footer clearfix no-border">
                       <a href="{{ url('/usuarios/create') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Nuevo Usuario</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $usuario)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->roles->implode('name', ',') }}</td>
                                    <td>
                                        <a href="{{ url('usuarios/'.$usuario->id.'/edit') }}" class="btn btn-warning" btn-sm><span class="glyphicon glyphicon-pencil"></a>
                                        
                                        @include('usuarios.delete')
                                    </td>
                                </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </section>
@endsection