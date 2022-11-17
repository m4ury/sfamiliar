@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sx-12 col-sm-12 col-lg-8">
            <div class="card card card-success card-outline">
                <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
                <div class="card-body">
                    {{ Form::open(['action' => 'PacienteController@update', 'method' => 'POST', 'url' => 'pacientes/'.$paciente->id, 'class' => 'form-horizontal']) }}
                    @method('PUT')
                    @include('pacientes.form')
<hr>
                    <div class="form-group row">
                        {!! Form::label('fellecido_label', 'Fallecido?', ['class' => 'col-sm-2
                        col-form-label']) !!}
                        <div class="col-sm-4">
                            {!! Form::checkbox('fallecido', 1, old('fallecido', $paciente->fallecido) ,['class' => 'form-control form-control col-sm fallecido']) !!}
                        </div>
                        <div class="form-group row fecha_f">
                            {!! Form::label('fecha_fellecido_label', 'Fecha', ['class' => 'col-sm col-form-label']) !!}
                            <div class="col">
                                {!! Form::date('fecha_fallecido',$paciente->fecha_fallecido, ['class' => 'form-control form-control col-sm']) !!}
                            </div>
                        </div>
                    </div>
                    <hr>
                    </div>
                    <div class="row">
                        <div class="col">
                            {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                        </div>
                        <div class="col">
                            <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                                {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
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
    $('#comuna, #sector, #ficha_familiar').select2({
        theme: "classic",
        width: '100%',
    });

    $("#fallecido").removeAttr("checked");

    $('.fecha_f').hide();

    $('.fallecido').click(function () {
        $('.fecha_f').fadeIn()[this.checked ? "show" : "hide"]();
    });

    $('input.actFisica').on('change', function() {
        $('input.actFisica').not(this).prop('checked', false);
    });
    $('input.maltrato').on('change', function() {
        $('input.maltrato').not(this).prop('checked', false);
    });
</script>
@endsection
