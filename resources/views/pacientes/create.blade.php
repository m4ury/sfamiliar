@extends('adminlte::page')
@section('title', 'crear-pacientes')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-12 col-lg">
            <div class="card card-success card-outline mt-3">
                <div class="card-header"><i class="fas fa-user mr-1"></i>Datos Paciente</div>
                    <div class="card-body">
                            {{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Personales</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Familiares</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                @include('pacientes.form')
                            </div>
                            <div class="row">
                                <div class="col">
                                    {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                                </div>
                                <div class="col">
                                    <a href="{{ url('pacientes') }}" style="text-decoration:none">
                                        {{ Form::button('Volver', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
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
    $('#sector, #comuna, #sexo').select2({
        theme: "classic",
        width: '100%',
    });

    $('input.pueblo_originario').on('change', function() {
        $('input.pueblo_originario').not(this).prop('checked', false);
    });
    $('input.migrante').on('change', function() {
        $('input.migrante').not(this).prop('checked', false);
    });
</script>
@endsection
