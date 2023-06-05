@extends('adminlte::page')
@section('title', 'nueva-vivienda')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <label for="vivienda">Nueva Vivienda</label>
                        <input type="text" name="vivienda"
                            value="{{ $familia->familia ?? '' }} - {{ $familia->fichaFamiliar() ?? '' }}"
                            class="form-control text-uppercase text-bold text-center" disabled>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ViviendaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        @include('viviendas.form')
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
