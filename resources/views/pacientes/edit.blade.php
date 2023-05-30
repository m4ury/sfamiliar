@extends('adminlte::page')
@section('title', 'editar-pacientes')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-success card-outline mt-3">
                    <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
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
                        {{-- <div class="row">
                            <div class="col">
                                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                                </a>
                            </div>
                        </div>
                                {{ Form::close() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('js')
    <script>
        $('#comuna, #sector, #ficha_familiar, #sexo, #e_civil, #escolaridad, #parentesco, #prevision').select2({
            theme: "classic",
            width: '100%',
        });

        $("#fallecido").removeAttr("checked");

        $('.fecha_f').hide();

        $('.fallecido').click(function() {
            $('.fecha_f').fadeIn()[this.checked ? "show" : "hide"]();
        });

        $('input.pueblo_originario').on('change', function() {
            $('input.pueblo_originario').not(this).prop('checked', false);
        });
        $('input.migrante').on('change', function() {
            $('input.migrante').not(this).prop('checked', false);
        });
    </script>
@endsection
