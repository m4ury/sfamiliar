@if($patologias)
    {{--<div class="col-sm-6 mb-2">
        --}}{{--<a class="btn bg-gradient-success btn-sm" title="Nuevo patologia"
           href="{{ route('patologias.create', $paciente->id) }}">
            <i class="fas fa-money-check-alt"></i>
            Nuevo patologia
        </a>--}}{{--

    </div>--}}
    <div class="col pb-2">
        <div class="card card-outline card-dark">
            <div class="card-header">
                Patologias
            </div>
            <div class="card-body">
                @foreach($patologias as $patologia)
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary rounded-pill my-3 text-bold">
                            {{ $patologia }}
                        </li>
                        {{--//como mejora visual color definido por base de datos segun patologia(proyecto)--}}
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endif
