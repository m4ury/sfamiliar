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
                            {{ $patologia->nombre_patologia }}</p>

                        @if($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2' )
                            <hr>
                            <div class="col">
                                @if(Carbon\Carbon::parse($paciente->racVigente)->diffInYears(\Carbon\Carbon::now()) < 1)
                                    <strong><i class="fas fa-check-double text-success mr-1"></i> RAC Vigente </strong>
                                    <br>
                                    <p class="btn rounded-pill bg-gradient-success">fecha
                                        Vigente {{ $paciente->racVigente }}</P>
                                @elseif(Carbon\Carbon::parse($paciente->racVigente)->diffInYears(\Carbon\Carbon::now()) < 1)
                                    <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>RAC Vigente</strong>
                                    <br>
                                    <p class="btn rounded-pill bg-gradient-danger">
                                        fecha {{ $paciente->racVigente }}</p>
                                @else
                                    <strong><i class="fas fa-question-circle mr-1"></i>RAC Vigente</strong>
                                    <br>
                                    <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                                    <br>
                                @endif
                                @endif
                            </div>
                            @if($patologia->nombre_patologia == 'DM2' )
                                <hr>
                                <div class="col">
                                    @if(Carbon\Carbon::parse($paciente->vfgVigente)->diffInYears(\Carbon\Carbon::now()) < 1)
                                        <strong><i class="fas fa-check-double text-success mr-1"></i> VFG Vigente
                                        </strong>

                                        <p class="btn rounded-pill bg-gradient-success">fecha
                                            Vigente {{ $paciente->vfgVigente }}</P>
                                    @elseif(Carbon\Carbon::parse($paciente->vfgVigente)->diffInYears(\Carbon\Carbon::now()) < 1)
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>VFG
                                            Vigente</strong>
                                        <br>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha {{ $paciente->vfgVigente }}</p>
                                    @else
                                        <strong><i class="fas fa-question-circle mr-1"></i>VFG Vigente</strong>
                                        <br>
                                        <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                                    @endif
                                    @endif
                                </div>
                                @endforeach
                    </li>
                </ul>
        </div>
    </div>
@endif