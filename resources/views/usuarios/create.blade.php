@extends('plantilla')
@section('seccion')
    <section class="content">
        <section class="col-lg-10 connectedSortable">
            <section class="content-header">
                <h1>
                    Crear nuevo Usuarios
                </h1>
            </section>
            <form action="{{ url('usuarios') }}" method="post">
                @csrf
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" required class="form-control">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" required class="form-control">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" required class="form-control">
                </div>
                <div class="form-group">
                <label for="email">Rol</label>
                <select class="form-control" name="rol">
                    @foreach ($roles as $key => $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                </div>
                <div class="justify-content-end">
                <input type="submit" value="Enviar" class="btn btn-success">
                </div>
            </form>
        </section>
    </section>
@endsection