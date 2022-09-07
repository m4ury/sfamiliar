@extends('adminlte::page')
@section('content')
@section('title', 'menu-familia')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users-cog"></i>
                    Familia
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group row nowrap">
                        <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">{{
                            $familia->fichaFamiliar() }}
                        </span>
                        <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">FAMILIA.: {{ $familia->familia
                            }}</span>
                        
                    <div class="col-sm text-right">
                        <a class="btn bg-gradient-primary btn-sm" title="Editar"
                            href="{{ route('familias.edit', $familia->id) }}"> Editar Familia <i
                                class="fas fa-pen mx-2"></i>
                        </a>
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
                                aria-selected="false">Integrantes</a>
                            <a class="nav-link" id="vert-tabs-patologias-tab" data-toggle="pill"
                                href="#vert-tabs-patologias" role="tab" aria-controls="vert-tabs-patologias"
                                aria-selected="false">Diagnosticos</a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade active show" id="vert-tabs-Familia" role="tabpanel"
                                aria-labelledby="vert-tabs-Familia-tab">
                                <div class="card-body">
                                    <strong><i class="fas fa-map-marker-alt"></i> Dirección</strong>
                                    <p class="text-muted">
                                        {{ $familia->direccion }}, {{ $familia->comuna ? : 'Licantén' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-phone-alt mr-1"></i> Telefono</strong>
                                    <p class="text-muted">{{ $familia->telefono ? : 'Sin datos...'}}</p>
                                    <hr>
                                    
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-controles" role="tabpanel"
                                aria-labelledby="vert-tabs-controles-tab">
                                
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-patologias" role="tabpanel"
                                aria-labelledby="vert-tabs-patologias-tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
