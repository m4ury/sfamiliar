@extends('adminlte::page')
@section('title', 'editar-familia')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card card-success card-outline">
                    <div class="card-header"><i class="fas fa-users mr-1"></i>Editando Familia {{ $familia->familia }}</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'FamiliaController@update', 'method' => 'POST', 'url' => 'familias/' . $familia->id, 'class' => 'form-horizontal']) }}
                        @method('PUT')

                        <div class="form-group row">
                            {!! Form::label('integrantes_label', 'Agregar integrante(s)', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::select('paciente_id', $pacientes, null, [
                                    'class' => 'form-control form-control-sm',
                                    'id' => 'pacientes',
                                    'placeholder' => 'Seleccione integrante',
                                ]) !!}
                                @if ($errors->has('paciente_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('paciente_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        @include('familias.form')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#sector, #comuna, #pacientes, #tipo_familia, #etapa_cicloVital').select2({
            theme: "classic",
            width: '100%'
        });
    </script>
@endsection
