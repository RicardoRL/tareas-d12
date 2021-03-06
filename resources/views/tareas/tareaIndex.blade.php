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
                  <hr>
                  <table class="table">
                    <tr>
                      <th>ID</th>
                      <th>Tareas</th>
                      <th>Descripcion</th>
                    </tr>
                    @foreach($tareas as $tarea)
                      <tr>
                        <td>{{$tarea->id}}</td>
                        <td><a href="{{route('tarea.show', $tarea->id)}}">{{$tarea->tarea}}</a></td>
                        <td>{{$tarea->descripcion}}</td>
                      </tr>
                    @endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
