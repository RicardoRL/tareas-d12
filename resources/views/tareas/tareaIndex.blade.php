@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de tareas</div>
                <div class="card-body">
                  <a href="{{action('TareaController@create')}}" class="btn btn-primary">Nueva Tarea</a>
                  <hr>
                  <a href="" class="btn btn-primary">Mostrar Listado</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
