@if($paciente->patologias)
<div class="col-sm mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nueva patologia"
        href="{{ route('pacientes.patologia', $paciente->id) }}">
        <i class="fas fa-money-check-alt"></i>
        Nueva Patologia
    </a>
    <div class="card-body">
        @foreach($paciente->patologias as $patologia)
        <ul class="list-group">
            <li class="list-group-item list-group-item my-3 text-bold ">
                <p class="btn btn-block badge-pill bg-gradient-{{ $patologia->color }}">
                    {{ $patologia->nombre_patologia }}
                </p>
                {{-- Hipertensos--}}
                @if($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2')
                {{-- RAC vigente--}}
                <div class="form-group row">
                    @if(\Carbon\Carbon::parse($paciente->racVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                        $paciente->racVigente != null)
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
                        $paciente->vfgVigente != null)
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
                            && $paciente->fondoOjoVigente != null)
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
                                $paciente->ecgVigente != null)
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
                                    365 && $paciente->ldlVigente != null)
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
                                    <= 365 && $paciente->controlPodologico_alDia != null)
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
                                            <p class="btn rounded-pill bg-gradient-success">
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
                                            <p class="btn rounded-pill bg-gradient-success">
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
                                        <= 365 && $paciente->aputacionPieDM2 != null)
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
                                            @endif
                </div>
                {{-- ACV IAM--}}
                @if($patologia->nombre_patologia === 'ANTECEDENTE IAM' or
                $patologia->nombre_patologia === 'ANTECEDENTE ACV')
                <div class="form-group row">
                    @if($paciente->usoAspirinas === 1)
                    <div class="col sm-3">
                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso Acido
                            Acetilsalicilico
                        </strong>
                        <p class="btn rounded-pill bg-gradient-success">
                            SI </P>
                    </div>
                    @else
                    <div class="col-sm-3">
                        <strong><i class="fas fa-question-circle mr-1"></i>Uso Acido
                            Acetilsalicilico</strong>
                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...
                        </p>
                    </div>
                    @endif
                </div>
                @endif

            </li>
        </ul>
        @endforeach
    </div>
</div>
@endif
