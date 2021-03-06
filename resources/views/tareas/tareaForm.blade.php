@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva tarea</div>
                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                  @if(isset($tarea))
                    {!! Form::model($tarea, ['route' => ['tarea.update', $tarea->id], 'method' => 'PATCH']) !!}
                  @else
                    {!! Form::open(['route' => 'tarea.store']) !!}
                  @endif
                    <!-- Campo de texto para nombre de la tarea -->
                    <div class="form-group">
                      {!! Form::label('nombreTarea', 'Nombre de tarea') !!}
                      {!! Form::text('tarea', null, [
                        'class' => 'form-control',
                        'id' => 'nombreTarea',
                        'placeholder' => 'Escribe el nombre de la tarea',
                        'required'
                      ]) !!}
                    </div>
                    <!-- Radiobuttons para la prioridad -->
                    <div class="form-group">
                      <label>Prioridad</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prioridad" id="inlineRadio1"
                        value=1 {{isset($tarea) && $tarea->prioridad == 1 ? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio1">Baja</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prioridad" id="inlineRadio2"
                        value=2 {{isset($tarea) && $tarea->prioridad == 2 ? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio2">Media</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="prioridad" id="inlineRadio3"
                        value=3 {{isset($tarea) && $tarea->prioridad == 3 ? "checked" : "" }}>
                        <label class="form-check-label" for="inlineRadio3">Alta</label>
                      </div>
                    </div>
                    <!-- Campo de texto para la fecha -->
                    <div class="form-group">
                      <label for="fechaEntrega">Fecha de entrega</label>
                      {!! Form::date('fecha_entrega', null, [
                      'class' => 'form-control',
                      'id' => 'fechaEntrega'
                      ])  !!}
                    </div>
                    <!-- Campo de texto para la descripción -->
                    <div class="form-group">
                      <label for="descripcionTarea">Descripción</label>
                      {!! Form::text('descripcion', null, [
                      'class' => 'form-control',
                      'id' => 'descripcionTarea',
                      'rows' => '3'
                      ]) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
