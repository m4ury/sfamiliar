@extends('adminlte::page')
@section('title', 'editar-vivienda')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card card-success card-outline">
                    <div class="card-header"><i class="fas fa-users mr-1"></i>Editando vivienda {{ $vivienda->familia->familia }}</div>
                    <div class="card-body">
                        {{ Form::model($vivienda, ['route' => ['viviendas.update', $vivienda], 'class' => 'form-horizontal']) }}
                        @method('PUT')
                        @include('viviendas.form')
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
