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
                                    <a class="nav-link active" id="nav-evaluacion-tab" data-toggle="tab"
                                        href="#nav-evaluacion" role="tab" aria-controls="nav-evaluacion"
                                        aria-selected="true">Evaluacion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-bajo-tab" data-toggle="tab" href="#nav-bajo" role="tab"
                                        aria-controls="nav-bajo" aria-selected="false">Riesgo Bajo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-intermedio-tab" data-toggle="tab" href="#nav-intermedio"
                                        role="tab" aria-controls="nav-intermedio" aria-selected="false">Riesgo
                                        Intermedio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-alto-tab" data-toggle="tab" href="#nav-alto" role="tab"
                                        aria-controls="nav-alto" aria-selected="false">Riesgo Alto</a>
                                </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="nav-fprotect-tab" data-toggle="tab" href="#nav-fprotect"
                                        role="tab" aria-controls="nav-fprotect" aria-selected="false">Factores
                                        Protectores</a>
                                </li>
                            </ul>
                        </nav>
                        {{ Form::open(['action' => 'EvaluacionController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}

                        <div class="tab-content" id="nav-tabContent">
                            @include('evaluaciones.form')
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('familias/' . $familia->id) }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
