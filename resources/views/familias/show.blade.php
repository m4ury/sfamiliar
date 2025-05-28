@extends('adminlte::page')
@section('title', 'menu-familia')
@section('content')
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
                            class="badge badge-pill bg-gradient-{{ $familia->sector == 'SB' ? 'warning' : 'info' }} badge mx-2 p-3">
                            FAMILIA: {{ $familia->familia }}</span>
                        <span
                            class="badge badge-pill bg-gradient-{{ $familia->sector == 'SA' ? 'info' : 'warning' }} badge mx-2 p-3">
                            FICHA FAMILIAR: {{ $familia->fichaFamiliar() }}
                        </span>
                        <span class="text-muted text-bold px-2 py-2">
                            Actualizado el: {{ $familia->updated_at->format('d-m-Y') }}
                        </span>
                        <div class="col col-sm px-2">
                            {{-- Dropdown de acciones para familia --}}
                            <div class="dropdown float-right mb-3">
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="accionesDropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Acciones
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accionesDropdown">
                                    <a class="dropdown-item" href="{{ route('familias.edit', $familia->id) }}">
                                        <i class="fas fa-pen mr-2"></i> Editar Familia
                                    </a>
                                    @if ($familia->vivienda)
                                        <a class="dropdown-item"
                                            href="{{ route('viviendas.edit', $familia->vivienda->id) }}">
                                            <i class="fas fa-home mr-2"></i> Editar Vivienda
                                        </a>
                                    @else
                                        <a class="dropdown-item" href="{{ route('viviendas.crea', $familia->id) }}">
                                            <i class="fas fa-home mr-2"></i> Crear Vivienda
                                        </a>
                                    @endif
                                    @if ($familia->ultimaEvaluacion)
                                        <a class="dropdown-item"
                                            href="{{ route('evaluaciones.edit', $familia->ultimaEvaluacion->id) }}">
                                            <i class="fas fa-envelope mr-2"></i> Editar Evaluación
                                        </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('evaluaciones.crea', $familia->id) }}">
                                        <i class="fas fa-plus mr-2"></i> Nueva Evaluación
                                    </a>
                                    <a class="dropdown-item" href="{{ route('planes.crea', $familia->id) }}">
                                        <i class="fas fa-clipboard-list mr-2"></i> Crear Plan de Intervención
                                    </a>
                                </div>
                            </div>
                            {{-- Fin Dropdown --}}
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
                                <a class="nav-link" id="vert-tabs-evaluacion-tab" data-toggle="pill"
                                    href="#vert-tabs-evaluacion" role="tab" aria-controls="vert-tabs-evaluacion"
                                    aria-selected="false">Evaluacion Riesgo</a>
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
                                        <hr>
                                        <strong><i class="fas fa-clipboard-list"></i> Con Plan de Intervención</strong>
                                        <p class="text-muted text-uppercase">
                                            {{ $familia->plan_intervencion_descripcion ?? 'No existe Información' }}
                                            {{ $familia->plan_intervencion_fecha ? ' - Fecha: ' . \Carbon\Carbon::parse($familia->plan_intervencion_fecha)->format('d-m-Y') : '' }}
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

                                <div class="tab-pane fade" id="vert-tabs-evaluacion" role="tabpanel"
                                    aria-labelledby="vert-tabs-evaluacion-tab">
                                    <div class="card-body">
                                        <div class="row pt-3">
                                            <div class="col-md table-responsive mx-auto style="width:auto;">
                                                <h4 class="text-center pt-3">CALIFICACION DE RIESGO BIOPSICOSOCIAL</h4>
                                                <table class="table table-md-responsive table-bordered ">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-nowrap">FECHA EVALUACION</th>
                                                            <td class="text-center text-nowrap">
                                                                {{ $familia->ultimaEvaluacion?->fecha_evaluacion ?? '--' }}
                                                            </td>
                                                            <td class="text-center text-nowrap">
                                                                {{ $familia->ultimaEvaluacion?->observacion ?? '--' }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th nowrap="">FACTS. BAJO</th>
                                                            <td class="text-center">
                                                                {{ $familia->ultimaEvaluacion?->factor?->fBajo_puntaje ?? 0 }}
                                                            </td>
                                                            <td>
                                                                {{ $familia->ultimaEvaluacion?->factor?->fBajo_observacion ?? '--' }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th nowrap="">FACTS. INTERMEDIO</th>
                                                            <td class="text-center">
                                                                {{ $familia->ultimaEvaluacion?->factor?->fIntermedio_puntaje ?? 0 }}
                                                            </td>
                                                            <td>
                                                                {{ $familia->ultimaEvaluacion?->factor?->fIntermedio_observacion ?? '--' }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th nowrap="">FACTS. ALTO</th>
                                                            <td class="text-center">
                                                                {{ $familia->ultimaEvaluacion?->factor?->fAlto_puntaje ?? 0 }}
                                                            </td>
                                                            <td>
                                                                {{ $familia->ultimaEvaluacion?->factor?->fAlto_observacion ?? '--' }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th nowrap="">PUNTAJE TOTAL / RIESGO</th>
                                                            <td class="text-center text-bold text-uppercase">
                                                                @if ($familia->ultimaEvaluacion && $familia->ultimaEvaluacion->factor)
                                                                    {{ $familia->ultimaEvaluacion->factor->puntaje }}
                                                                @else
                                                                    0
                                                                @endif
                                                            </td>
                                                            <td class="text-center text-bold text-uppercase">
                                                                @if ($familia->ultimaEvaluacion && $familia->ultimaEvaluacion->factor)
                                                                    {{ $familia->ultimaEvaluacion->resultado_evaluacion }}
                                                                @else
                                                                    Sin datos...
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <div class="row text-muted small">
                                                    <p class="col-sm-4">
                                                        <span class="text-bold">BAJO: </span> De 0 a 9 ptos.
                                                    </p>
                                                    <p class="col-sm-4">
                                                        <span class="text-bold">MEDIO: </span> De 10 a 19 ptos.
                                                    </p>
                                                    <p class="col-sm-4">
                                                        <span class="text-bold">ALTO: </span> Sobre 20 ptos.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Listado de Factores Protectores --}}
                                        @if ($familia->ultimaEvaluacion && $familia->ultimaEvaluacion->factor)
                                            @php
                                                $descripcionesProtectores = [
                                                    'fProtect_1' => 'Percepción de suficiencia económica.',
                                                    'fProtect_2' => 'Escolaridad mayor a 8vo básico de los Padres.',
                                                    'fProtect_3' => 'Vivienda y saneamiento adecuados.',
                                                    'fProtect_4' => 'Conexión a subsistemas mayores.',
                                                    'fProtect_5' =>
                                                        'Funcionalidad adecuada: expresión de afecto, normas claras y flexibles, comunicación directa, ritos familiares.',
                                                    'fProtect_6' => 'Existencia de figura adulta con autoridad moral.',
                                                    'fProtect_7' => 'Familias de origen cercanas y apoyadoras.',
                                                    'fProtect_8' => 'Existencia de redes de apoyo comunitarias.',
                                                    'fProtect_9' => 'Participación en grupos religiosos.',
                                                    'fProtect_10' => 'Activiad deportiva sistemática.',
                                                    'fProtect_11' => 'Otros factores protectores relevantes.',
                                                ];
                                                $factoresProtectores = [];
                                                foreach ($descripcionesProtectores as $campo => $desc) {
                                                    if ($familia->ultimaEvaluacion->factor->$campo ?? false) {
                                                        $factoresProtectores[] = $desc;
                                                    }
                                                }
                                            @endphp

                                            <div class="mt-3">
                                                <h5 class="text-bold">Factores Protectores:</h5>
                                                @if (count($factoresProtectores) > 0)
                                                    <ul class="list-unstyled">
                                                        @foreach ($factoresProtectores as $desc)
                                                            <li><i class="fa fa-check text-success"></i>
                                                                {{ $desc }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <span class="text-muted">No hay factores protectores seleccionados en
                                                        la última evaluación.</span>
                                                @endif
                                            </div>
                                        @endif
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
