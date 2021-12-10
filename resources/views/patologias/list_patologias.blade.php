@if($paciente->patologias)
<div class="col-sm mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nueva patologia"
        href="{{ route('pacientes.patologia', $paciente->id) }}">
        <i class="fas fa-money-check-alt"></i>
        Nueva Patologia
    </a>
    <div class="card-body">
        @foreach($paciente->patologias as $patologia)
        <div class="list-group">
            <div class="list-group-item list-group-item my-3 text-bold ">
                <p class="btn btn-block badge-pill bg-gradient-{{ $patologia->color }}">
                    {{ $patologia->nombre_patologia }} @if($patologia->pivot->created_at == null) - No existen Datos
                    @else Desde : {{ $patologia->pivot->created_at->format('d-m-Y') }}
                    @endif
                </p>
                {{-- Hipertensos--}}
                @if($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2')
                {{-- RAC vigente--}}
                <div class="form-group row">
                    @if(\Carbon\Carbon::parse($paciente->racVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                        $paciente->racVigente != null && $paciente->racVigente!= '0000/00/00')
                        <div class="col sm-3">
                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> RAC Vigente
                            </strong>
                            <p class="btn rounded-pill bg-gradient-success">
                                fecha: {{ $paciente->racVigente }}</P>
                        </div>
                        @elseif(Carbon\Carbon::parse($paciente->racVigente)->diffInDays(Carbon\Carbon::now()) > 365)
                        <div class="col sm-3">
                            <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>RAC Vigente:
                                NO</strong>
                            <p class="btn rounded-pill bg-gradient-danger">
                                fecha: {{ $paciente->racVigente }}</p>
                        </div>
                        @else
                        <div class="col-sm-3">
                            <strong><i class="fas fa-question-circle mr-1"></i>RAC Vigente</strong>
                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                        </div>
                        @endif
                </div>
                @endif
                {{-- Diabeticos--}}
                @if($patologia->nombre_patologia == 'DM2')
                <div class="form-group row">
                    {{--Vfg--}}
                    @if(Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(Carbon\Carbon::now()) <= 365 &&
                        $paciente->vfgVigente != null && $paciente->vfgVigente!= '0000/00/00')
                        <div class="col-sm-4">
                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> VFG Vigente
                            </strong>
                            <p class="btn rounded-pill bg-gradient-success">
                                fecha: {{ $paciente->vfgVigente }}</P>
                        </div>
                        @elseif(Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(\Carbon\Carbon::now()) > 365)
                        <div class="col-sm-4">
                            <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>VFG
                                Vigente: NO</strong>
                            <p class="btn rounded-pill bg-gradient-danger">
                                fecha: {{ $paciente->vfgVigente }}</p>
                        </div>
                        @else
                        <div class="col-sm-4">
                            <strong><i class="fas fa-question-circle mr-1"></i>VFG Vigente</strong>
                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                        </div>
                        @endif
                        {{--fondo de ojo--}}
                        @if(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now()) <= 365
                            && $paciente->fondoOjoVigente != null && $paciente->ecgVigente!= '0000/00/00')
                            <div class="col-sm-5">
                                <strong><i class="fas fa-thumbs-up text-success"></i> Fondo Ojo Vigente
                                </strong>
                                <p class="btn rounded-pill bg-gradient-success">
                                    fecha: {{ $paciente->fondoOjoVigente }}</P>
                            </div>
                            @elseif(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now())
                            > 365)
                            <div class="col-sm-5">
                                <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Fondo Ojo Vigente:
                                    NO</strong>
                                <p class="btn rounded-pill bg-gradient-danger">
                                    fecha: {{ $paciente->fondoOjoVigente }}</p>
                            </div>
                            @else
                            <div class="col-sm-5">
                                <strong><i class="fas fa-question-circle mr-1"></i>Fondo Ojo Vig.</strong>
                                <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                            </div>
                            @endif
                            {{--electrocardiograma--}}
                            @if(Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                $paciente->ecgVigente != null && $paciente->ecgVigente!= '0000/00/00')
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-thumbs-up text-success mr-1"></i> ECG Vigente
                                    </strong>
                                    <p class="btn rounded-pill bg-gradient-success">
                                        fecha: {{ $paciente->ecgVigente }}</P>
                                </div>
                                @elseif(Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) >
                                365)
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>ECG Vigente:
                                        NO</strong>
                                    <p class="btn rounded-pill bg-gradient-danger">
                                        fecha: {{ $paciente->ecgVigente }}</p>
                                </div>
                                @else
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-question-circle mr-1"></i>ECG Vigente</strong>
                                    <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                </div>
                                @endif
                                {{--ldl--}}
                                @if(Carbon\Carbon::parse($paciente->ldlVigente)->diffInDays(\Carbon\Carbon::now()) <=
                                    365 && $paciente->ldlVigente != null && $paciente->ldlVigente!= '0000/00/00')
                                    <div class="col-sm-5">
                                        <strong><i class="fas fa-thumbs-up text-success"></i> LDL Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->ldlVigente }}</P>
                                    </div>
                                    @elseif(Carbon\Carbon::parse($paciente->ldlVigente)->diffInDays(\Carbon\Carbon::now())
                                    > 365)
                                    <div class="col-sm-5">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>LDL Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->ldlVigente }}</p>
                                    </div>
                                    @else
                                    <div class="col-sm-5">
                                        <strong><i class="fas fa-question-circle mr-1"></i>LDL Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                    @endif
                                    {{--control podologico--}}
                                    @if(Carbon\Carbon::parse($paciente->controlPodologico_alDia)->diffInDays(\Carbon\Carbon::now())
                                    <= 365 && $paciente->controlPodologico_alDia != null &&
                                        $paciente->controlPodologico_alDia!= '0000/00/00')
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Control
                                                Podologico al dia
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success">
                                                fecha: {{ $paciente->controlPodologico_alDia }}</P>
                                        </div>
                                        @elseif(Carbon\Carbon::parse($paciente->controlPodologico_alDia)->diffInDays(\Carbon\Carbon::now())
                                        > 365)
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Control
                                                Podologico al dia:
                                                NO</strong>
                                            <p class="btn rounded-pill bg-gradient-danger">
                                                fecha: {{ $paciente->controlPodologico_alDia }}</p>
                                        </div>
                                        @else
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-question-circle mr-1"></i>Control Podologico al
                                                dia</strong>
                                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        </div>
                                        @endif
                                        {{--Uso Insulina, Ieca ARA2--}}
                                        @if($paciente->usoInsulina === 1)
                                        <div class="col-sm-3">
                                            <strong><i class="fas fa-pills text-success"></i>Tratamiento con
                                                Insulina:
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success px-4">
                                                SI</p>
                                        </div>
                                        @else
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-question-circle mr-1"></i>Tratamiento con
                                                Insulina</strong>
                                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        </div>
                                        @endif
                                        @if($paciente->usoIecaAraII === 1)
                                        <div class="col-sm-3">
                                            <strong><i class="fas fa-pills text-success"></i>Tratamiento con
                                                IECA o ARA II:
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success px-4">
                                                SI</p>
                                        </div>
                                        @else
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-question-circle mr-1"></i>Tratamiento con
                                                IECA o ARA II:</strong>
                                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        </div>
                                        @endif
                                        {{--amputacion pie dm2--}}
                                        @if(Carbon\Carbon::parse($paciente->aputacionPieDM2)->diffInDays(\Carbon\Carbon::now())
                                        <= 365 && $paciente->aputacionPieDM2 != null && $paciente->aputacionPieDM2!=
                                            '0000/00/00')
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-thumbs-up text-success"></i> Amputación Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-success">
                                                    fecha: {{ $paciente->aputacionPieDM2 }}</P>
                                            </div>
                                            @else
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-question-circle mr-1"></i>Amputación Pie
                                                    Diabetico</strong>
                                                <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                            </div>
                                            @endif

                                            {{--evaluacion pie dm2--}}
                                            {{--dd($paciente->controls()->pluck('evaluacionPie')->last())--}}
                                            @if ($paciente->controls()->pluck('evaluacionPie') != "null")
                                            @if ($paciente->controls()->pluck('evaluacionPie')->last() == 'Bajo')
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-stethoscope text-success"></i> Evaluacion Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-success">
                                                    Riesgo: {{ $paciente->controls()->pluck('evaluacionPie') }}</P>
                                            </div>
                                            @elseif ($paciente->controls()->pluck('evaluacionPie') == 'Moderado')
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-stethoscope text-warning"></i> Evaluacion Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-warning">
                                                    Riesgo: {{ $paciente->controls()->pluck('evaluacionPie') }}</P>
                                            </div>
                                            @elseif ($paciente->controls()->pluck('evaluacionPie') == 'Alto')
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-stethoscope text-danger"></i> Evaluacion Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-danger">
                                                    Riesgo: {{ $paciente->controls()->pluck('evaluacionPie') }}</P>
                                            </div>
                                            @elseif ($paciente->controls()->pluck('evaluacionPie') == 'Maximo')
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-stethoscope text-danger"></i> Evaluacion Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-danger">
                                                    Riesgo: {{ $paciente->controls()->pluck('evaluacionPie') }}</P>
                                            </div>
                                            @else
                                            <div class="col-sm-5">
                                                <strong><i class="fas fa-question-circle mr-1"></i>Evaluacion Pie
                                                    Diabetico</strong>
                                                <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                            </div>
                                            @endif
                                            @endif
                </div>
                @endif
                {{-- ACV IAM--}}
                @if($patologia->nombre_patologia === 'ANTECEDENTE IAM' or
                $patologia->nombre_patologia === 'ANTECEDENTE ACV')
                <div class="form-group row">
                    @if($paciente->usoAspirinas === 1)
                    <div class="col sm-5">
                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso Aspirinas
                        </strong>
                        <p class="btn rounded-pill bg-gradient-success px-4">
                            SI </P>
                    </div>
                    @else
                    <div class="col-sm-3">
                        <strong><i class="fas fa-question-circle mr-1"></i>Uso Aspirinas</strong>
                        <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                        </p>
                    </div>
                    @endif
                    {{--<div class="form-group row">--}}
                        @if($paciente->usoEstatinas === 1)
                        <div class="col sm-3">
                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso
                                Estatinas
                            </strong>
                            <p class="btn rounded-pill bg-gradient-success px-4">
                                SI </P>
                        </div>
                        @else
                        <div class="col-sm-3">
                            <strong><i class="fas fa-question-circle mr-1"></i>Uso
                                Estatinas</strong>
                            <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                            </p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endif
        </div>
    </div>
    @endforeach
    @endif
