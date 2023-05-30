@extends('adminlte::page')
@section('title', 'crear-pacientes')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header">Datos del Paciente</div>
                    <div class="card-body">
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

@endsection
@section('js')
    <script>
        $('#sector, #comuna, #sexo, #e_civil, #escolaridad, #parentesco, #prevision').select2({
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
