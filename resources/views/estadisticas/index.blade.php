@extends('adminlte::page')

@section('title', 'estadisticas')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P7. FAMILIAS EN CONTROL DE SALUD FAMILIAR
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccionA1') }}">SECCION A.1. y B</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
