@if($paciente->patologias->count() >0)
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
                @foreach($paciente->patologias as $patologia)
                    <ul class="list-group">
                        <li class="list-group-item list-group-item my-3 text-bold ">
                            <a class="btn  btn-block btn-outline-primary" data-toggle="collapse"
                               href="#{{ str_replace(' ', "_", $patologia->nombre_patologia)  }}" role="button" aria-expanded="false"
                               aria-controls="{{ str_replace(' ', "_", $patologia->nombre_patologia) }}">
                                {{ $patologia->nombre_patologia }}
                            </a>
                            @if($patologia->subPatologias->count() > 0)
                                <div class="collapse" id="{{ str_replace(' ', "_", $patologia->nombre_patologia) }}">
                                    @foreach($patologia->subPatologias as $sub)
                                    <div class="card card-body">
                                        <div class="row">
                                            {{ $sub->nombre_sub .': '. $sub->valor}}
                                        </div>
                                    </div>
                                        @endforeach
                                </div>
                            @endif
                            {{--@endforeach--}}

                        </li>
                        {{--//como mejora visual color definido por base de datos segun patologia(proyecto)--}}
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endif
