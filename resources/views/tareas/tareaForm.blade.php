@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva tarea</div>
                <div class="card-body">
                  {{-- No user_id categoria_id equipo_id --}}
                  <form>
                    <!-- Campo de texto para nombre de la tarea -->
                    <div class="form-group">
                      <label for="nombreTarea">Nombre de tarea</label>
                      <input type="text" class="form-control" id="nombreTarea" placeholder="Escribe el nombre de la tarea">
                    </div>
                    <!-- Radiobuttons para la prioridad -->
                    <div class="form-group">
                      <label>Prioridad</label><br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3">
                        <label class="form-check-label" for="inlineRadio3">3</label>
                      </div>
                    </div>
                    <!-- Campo de texto para la fecha -->
                    <div class="form-group">
                      <label for="fechaEntrega">Fecha de entrega</label>
                      <input type="date" class="form-control" id="fechaEntrega">
                    </div>
                    <!-- Campo de texto para la descripción -->
                    <div class="form-group">
                      <label for="descripcionTarea">Descripción</label>
                      <textarea class="form-control" id="descripcionTarea" rows="3"></textarea>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
