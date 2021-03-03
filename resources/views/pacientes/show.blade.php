@extends('adminlte::page)
@section('content')
@section('title', 'menu-paciente')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users-cog"></i>
                    Paciente
                </h3>
            </div>
            <div class="card-body">
                <h4>{{ $paciente->fullName() }}</h4>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link" id="vert-tabs-presupuestos-tab" data-toggle="pill"
                               href="#vert-tabs-presupuestos" role="tab" aria-controls="vert-tabs-presupuestos"
                               aria-selected="false">Controles</a>
                            <a class="nav-link" id="vert-tabs-datos-tab" data-toggle="pill" href="#vert-tabs-datos"
                               role="tab" aria-controls="vert-tabs-abonos" aria-selected="false">Datos Personales</a>
                        </div>
                    </div>
                    <div class="col col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane fade" id="vert-tabs-presupuestos" role="tabpanel"
                                 aria-labelledby="vert-tabs-presupuestos-tab">
                                @include('pacientes.list_controles', $paciente)
                                @if($paciente->controls->count() > 0)
                                    <a href="{{ route('controles', $paciente->id) }}"><span
                                                class="text-bold">Ver Todos los controles...</span></a>
                                @else
                                    <p class="text-muted">No hay Controles aun, crea uno <i
                                                class="far fa-laugh-wink fa-2x"></i></p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-datos" role="tabpanel"
                                 aria-labelledby="vert-tabs-datos-tab">

                                @include('pacientes.list_datos', $paciente)
                                <a href="{{ route('datos', $paciente->id) }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()