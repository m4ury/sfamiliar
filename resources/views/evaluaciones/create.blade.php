@extends('adminlte::page')
@section('title', 'nueva-evaluacion')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col">
                <div class="card card-success card-outline">
                    <div class="card-body">
                        <nav>
                            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="nav-evaluacion-tab" data-toggle="tab" href="#nav-evaluacion"
                                        role="tab" aria-controls="nav-evaluacion" aria-selected="true">Evaluacion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-bajo-tab" data-toggle="tab" href="#nav-bajo" role="tab"
                                        aria-controls="nav-bajo" aria-selected="false">Riesgo Bajo (1)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-intermedio-tab" data-toggle="tab" href="#nav-intermedio"
                                        role="tab" aria-controls="nav-intermedio" aria-selected="false">Riesgo Intermedio
                                        (2)</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-alto-tab" data-toggle="tab" href="#nav-alto" role="tab"
                                        aria-controls="nav-alto" aria-selected="false">Riesgo Alto (3)</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @include('evaluaciones.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
