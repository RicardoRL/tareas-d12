@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de "{{$tarea->tarea}}"</div>
                <div class="card-body">
                  <p>
                    <strong>Id: </strong>{{$tarea->id}}
                  </p>
                  <p>
                    <strong>Nombre: </strong>{{$tarea->tarea}}
                  </p>
                  <p>
                    <strong>Prioridad: </strong>{{$tarea->prioridad}}
                  </p>
                  <p>
                    <strong>Fecha de entrega: </strong>{{$tarea->fecha_entrega}}
                  </p>
                  <p>
                    <strong>Descripción: </strong>
                  </p>
                  <p>{{$tarea->descripcion}}</p>
                  <hr>
                  <a href="{{route('tarea.edit', $tarea->id)}}" class="btn btn-primary">Editar tarea</a>
                  <hr>
                  <form action="{{route('tarea.destroy', $tarea->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
