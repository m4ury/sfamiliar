@extends('adminlte::page')
@section('title', 'editar-pacientes')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-success card-outline mt-3">
                    <div class="card-header">
                        <i class="fas fa-user-edit mr-1">
                        </i>Editando Paciente
                        @if ($paciente->familia && $paciente->familia->exists())
                            <span
                                class="badge badge-pill bg-gradient-{{ $paciente->familia->sector == 'SB' ? 'warning' : 'info' }} badge mx-3 py-2">
                                Familia: {{ $paciente->familia->familia }}</span>
                            <span
                                class="badge badge-pill bg-gradient-{{ $paciente->familia->sector == 'SA' ? 'info' : 'warning' }} badge mx-3 py-2">
                                Ficha familiar: {{ $paciente->familia->fichaFamiliar() }}
                            </span>
                            {{-- @elseif (
                            !\App\Familia::where('id', $paciente->familia_id)->exists() &&
                                !\App\Familia::where('id', $paciente->familia_id)->exists()
                            )
                            <span class="mx-3 py-2 text-bold text-danger"> Familia no existe, desea corregir familia?</span>
                            {!! Form::open(['route' => ['corregir.familia', $paciente->id], 'method' => 'post']) !!}
                            {!! Form::submit('Corregir Familia', ['class' => 'btn btn-xs btn-warning']) !!}
                            {!! Form::close() !!} --}}
                        @endif
                    </div>

                    <div class="card-body">
                        {{ Form::open(['action' => 'PacienteController@update', 'method' => 'POST', 'url' => 'pacientes/' . $paciente->id, 'class' => 'form-horizontal']) }}
                        @method('PUT')
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Personales</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Familiares</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @include('pacientes.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        $('#comuna, #sector, #ficha_familiar, #sexo, #e_civil, #escolaridad, #parentesco, #prevision, .motivo_pasivo').select2({
            theme: "classic",
            width: '100%',
        });

        $("#fallecido").removeAttr("checked");

        $('.fecha_f, .fecha_p').hide();

        $('.fallecido').click(function() {
            $('.fecha_f').fadeIn()[this.checked ? "show" : "hide"]();
        });
        $('.pasivo').click(function() {
            $('.fecha_p').fadeIn()[this.checked ? "show" : "hide"]();
        });

        // Si el checkbox viene chequeado desde BD, muestra el campo correspondiente
    if ($('.fallecido').is(':checked')) {
        $('.fecha_f').show();
    }
    if ($('.pasivo').is(':checked')) {
        $('.fecha_p').show();
    }
        $('input.pueblo_originario').on('change', function() {
            $('input.pueblo_originario').not(this).prop('checked', false);
        });
        $('input.migrante').on('change', function() {
            $('input.migrante').not(this).prop('checked', false);
        });
    </script>
@endsection
