@extends('adminlte::page')
@section('content')
@section('title', 'menu-familia')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="btn bg-gradient-primary btn-sm mr-3" title="Volver" href="{{ route('familias.index') }}">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                        Volver
                    </a>
                    <i class="fas fa-users-cog"></i>
                    Familia
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group row nowrap">
                    <span
                        class="badge badge-pill bg-gradient-{{ $familia->sector == 'SB' ? 'warning' : 'info' }} badge mx-3 py-2">
                        FAMILIA: {{ $familia->familia }}</span>
                    <span
                        class="badge badge-pill bg-gradient-{{ $familia->sector == 'SA' ? 'info' : 'warning' }} badge mx-3 py-2">
                        FICHA FAMILIAR: {{ $familia->fichaFamiliar() }}
                    </span>
                    <span class="text-muted text-bold">
                        Actualizado el: {{ $familia->updated_at->format('d-m-Y') }}
                    </span>
                    <div class="col col-sm">
                        <div class="float-right px-2">
                            <a class="btn bg-gradient-success btn-sm" title="Vivienda"
                                href="{{ route('viviendas.create', $familia->id) }}">Vivienda
                                <i class="fas fa-home"></i>
                            </a>
                        </div>
                        <div class="float-right px-2">
                            <a class="btn bg-gradient-success btn-sm" title="Editar"
                                href="{{ route('familias.edit', $familia->id) }}"> Editar Familia <i
                                    class="fas fa-pen mx-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-Familia-tab" data-toggle="pill"
                                href="#vert-tabs-Familia" role="tab" aria-controls="vert-tabs-Familia"
                                aria-selected="true">Informacion Familia</a>
                            <a class="nav-link" id="vert-tabs-controles-tab" data-toggle="pill"
                                href="#vert-tabs-controles" role="tab" aria-controls="vert-tabs-presupuestos"
                                aria-selected="false">Identificacion del Grupo Familiar</a>
                            {{-- <a class="nav-link" id="vert-tabs-patologias-tab" data-toggle="pill"
                                href="#vert-tabs-patologias" role="tab" aria-controls="vert-tabs-patologias"
                                aria-selected="false">Genograma</a> --}}
                            <a class="nav-link" id="vert-tabs-vivienda-tab" data-toggle="pill"
                                href="#vert-tabs-vivienda" role="tab" aria-controls="vert-tabs-vivienda"
                                aria-selected="false">Vivienda</a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade active show" id="vert-tabs-Familia" role="tabpanel"
                                aria-labelledby="vert-tabs-Familia-tab">
                                <div class="card-body">
                                    <strong><i class="fas fa-map-marker-alt"></i> Dirección</strong>
                                    <p class="text-muted">
                                        {{ $familia->domicilio }}, {{ $familia->comuna ?: 'Hualañe' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-phone-alt mr-1"></i> Telefono</strong>
                                    <p class="text-muted">{{ $familia->fono ?: 'Sin datos...' }}</p>
                                    <hr>
                                    <strong><i class="fas fa-users-cog"></i> Tipo Familia</strong>
                                    <p class="text-muted text-uppercase">
                                        {{ $familia->tipo_familia ?? '' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fa fa-chart-bar"></i> Etapa ciclo Vital</strong>
                                    <p class="text-muted text-uppercase">
                                        {{ str_replace('_', ' ', $familia->etapa_cicloVital ?? '') }}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-controles" role="tabpanel"
                                aria-labelledby="vert-tabs-controles-tab">
                                @include('integrantes.list_controles')

                            </div>
                            {{-- <div class="tab-pane fade" id="vert-tabs-patologias" role="tabpanel"
                                aria-labelledby="vert-tabs-patologias-tab">
                            </div> --}}
                            <div class="tab-pane fade" id="vert-tabs-vivienda" role="tabpanel"
                                aria-labelledby="vert-tabs-vivienda-tab">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-home"></i> Tipo vivienda:
                                            </strong>
                                            <p class="text-muted">
                                                {{ $familia->vivienda->tipo_vivienda ?? '' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-home"></i> Tenencia Casa:
                                            </strong>
                                            <p class="text-muted">
                                                {{ $familia->vivienda->tenencia ?? '' }}
                                            </p>
                                        </div>
                                    </div>

                                    <hr>
                                    <strong><i class="fas fa-mountain mr-1"></i> Tenencia Sitio: </strong>
                                    <p class="text-muted">{{ $familia->vivienda->tenencia_sitio ?? 'Sin datos...' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-users-cog"></i> Tipo Familia</strong>
                                    <p class="text-muted text-uppercase">
                                        {{ $familia->tipo_familia ?? '' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fa fa-chart-bar"></i> Etapa ciclo Vital</strong>
                                    <p class="text-muted text-uppercase">
                                        {{ str_replace('_', ' ', $familia->etapa_cicloVital ?? '') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
