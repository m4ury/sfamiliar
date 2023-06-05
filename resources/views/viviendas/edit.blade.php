@extends('adminlte::page')
@section('title', 'editar-vivienda')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card card-success card-outline">
                    <div class="card-header"><i class="fas fa-users mr-1"></i>Editando vivienda
                        {{ $vivienda->familia->familia }}</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ViviendaController@update', 'method' => 'POST', 'url' => 'viviendas/' . $vivienda->id, 'class' => 'form-horizontal']) }}
                        @method('PATCH')
                        @include('viviendas.form')
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
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
@section('js')
    <script>
        $('#sector, #comuna, #pacientes, #tipo_vivienda, #etapa_cicloVital').select2({
            theme: "classic",
            width: '100%'
        });
    </script>
@endsection
