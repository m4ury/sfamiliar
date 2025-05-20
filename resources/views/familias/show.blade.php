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

                            <div class="float-right px-2">
                                @if ($familia->evaluacion)
                                    <a class="btn bg-gradient-primary btn-sm" title="editar Evaluacion"
                                        href="{{ route('evaluaciones.edit', $familia->evaluacion->id) }}">editar
                                        Evaluacion
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                @else
                                    <a class="btn bg-gradient-success btn-sm" title="nueva evaluacion"
                                        href="{{ route('evaluaciones.crea', $familia->id) }}">Nueva evaluacion
                                        <i class="fas fa-envelope"></i>
                                    </a>
                                @endif
                            </div>

                            @if ($familia->vivienda)
                                <a class="btn bg-gradient-primary btn-sm" title="editar Vivienda"
                                    href="{{ route('viviendas.edit', $familia->vivienda->id) }}">editar Vivienda
                                    <i class="fas fa-home"></i>
                                </a>
                            @else
                                <a class="btn bg-gradient-success btn-sm" title="nueva Vivienda"
                                    href="{{ route('viviendas.crea', $familia->id) }}">nueva Vivienda
                                    <i class="fas fa-home"></i>
                                </a>
                            @endif
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
                            <a class="nav-link" id="vert-tabs-vivienda-tab" data-toggle="pill"
                                href="#vert-tabs-vivienda" role="tab" aria-controls="vert-tabs-vivienda"
                                aria-selected="false">Vivienda</a>
                            <a class="nav-link" id="vert-tabs-sanitarias-tab" data-toggle="pill"
                                href="#vert-tabs-sanitarias" role="tab" aria-controls="vert-tabs-sanitarias"
                                aria-selected="false">Cond. Sanitarias</a>
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
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->tipo_vivienda ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-home"></i> Tenencia Casa:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->material ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-hammer"></i> Material const.:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->tenencia ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-mountain"></i> Tenencia Sitio:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->tenencia_sitio ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-building"></i> Conservacion:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->conservacion ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-fire"></i> Calefaccion principal:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->calefaccion ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-door-open"></i> Num. Piezas:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->num_piezas ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-door-closed"></i> Num. Dormitorios:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->num_dormitorios ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-bed"></i> Num. Camas:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->num_camas ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-sanitarias" role="tabpanel"
                                aria-labelledby="vert-tabs-sanitarias-tab">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-tint"></i> Agua:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->agua ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-lightbulb"></i> Luz:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->luz ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-toilet"></i> Disp. excretas:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->excretas ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-paw"></i> Animales:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->animales ?? 'Sin datos...' }}
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col col-sm">
                                            <strong>
                                                <i class="fas fa-trash"></i> Basura:
                                            </strong>
                                            <p class="text-muted text-uppercase">
                                                {{ $familia->vivienda->basura ?? 'Sin datos...' }}
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
    </div>
</div>
@endsection
