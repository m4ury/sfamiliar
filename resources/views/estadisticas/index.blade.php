@extends('adminlte::page')

@section('title', 'estadisticas')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P4. POBLACION EN CONTROL PROGRAMA DE SALUD CARDIOVASCULAR (PSCV)
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{route('estadisticas.seccion-a')}}">SECCIÓN A: PROGRAMA SALUD CARDIOVASCULAR
                                (PSCV)</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{route('estadisticas.seccion-b')}}">SECCIÓN B: METAS DE COMPENSACIÓN</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{route('estadisticas.seccion-c')}}">SECCIÓN C: VARIABLES DE SEGUIMIENTO DEL PSCV AL CORTE</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
