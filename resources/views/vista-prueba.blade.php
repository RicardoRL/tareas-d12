@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  Vista de prueba
                </div>
                <div class="card-body">
                  Hola {{$info}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
