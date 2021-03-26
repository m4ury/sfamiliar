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
                            <p class="btn btn-block badge-pill bg-gradient-{{ $patologia->color }}">{{ $patologia->nombre_patologia }}</p>
                        </li>
                        {{--//como mejora visual color definido por base de datos segun patologia(proyecto)--}}
                    </ul>
                @endforeach
            </div>
        </div>
@endif
