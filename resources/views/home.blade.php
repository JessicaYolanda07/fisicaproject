@extends('plantilla')
@section('seccion')
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{$saludo}}
    </div>          
@endsection