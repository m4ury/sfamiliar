@extends('adminlte::page')
@section('title', 'nueva-evaluacion')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col">
                <div class="card card-success card-outline">
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-evaluacion-tab" data-toggle="tab"
                                    href="#nav-evaluacion" role="tab" aria-controls="nav-evaluacion"
                                    aria-selected="true">Evaluación</a>
                                <a class="nav-item nav-link" id="nav-bajo-tab" data-toggle="tab" href="#nav-bajo"
                                    role="tab" aria-controls="nav-bajo" aria-selected="true">Riesgo Bajo (1)</a>
                                <a class="nav-item nav-link" id="nav-intermedio-tab" data-toggle="tab"
                                    href="#nav-intermedio" role="tab" aria-controls="nav-intermedio"
                                    aria-selected="false">Riesgo Intermedio (2)</a>
                                <a class="nav-item nav-link" id="nav-alto-tab" data-toggle="tab" href="#nav-alto"
                                    role="tab" aria-controls="nav-alto" aria-selected="false">Riesgo Alto (3)</a>
                            </div>
                        </nav>
                        {{ Form::open(['action' => 'EvaluacionController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}

                        {{ Form::hidden('familia_id', $familia->id) }}
                        {{ Form::hidden('evaluacion_id', $eval->id) }}
                        {{ Form::hidden('user_id', Auth::user()->id) }}

                        <div class="tab-pane fade show active" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
                            <div class="row py-3">
                                <div class="col col-sm-3 col-md col-lg">
                                    {{ Form::label('nombre', 'Nombre familia') }}
                                    {{ Form::text('nombre', $familia->familia, ['class' => 'form-control', 'readonly']) }}
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            @include('evaluaciones.form')
                        </div>

                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('familias.show', $familia->id) }}" style="text-decoration:none">
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
