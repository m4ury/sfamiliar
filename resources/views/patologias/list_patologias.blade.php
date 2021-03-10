@if($patologias)
    <div class="col-sm-6 mb-2">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo patologia"
           href="{{ route('patologias.create', $paciente->id) }}">
            <i class="fas fa-money-check-alt"></i>
            Nuevo patologia
        </a>
        @if (\Request::is('patologia/*'))
            <a class="btn bg-gradient-secondary btn-sm" title="Regresar"
               href="{{ route('pacientes.show', $paciente->id) }}">
                <i class="fas fa-arrow-alt-circle-left"></i>
                Atras
            </a>
        @endif
    </div>
    <hr>
    <div class="col pb-2">
        <div class="card card-outline card-dark">
            <div class="col-md-12 table-responsive pt-3">
                {{--<table class="table table-hover table-md-responsive table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Profesional</th>
                        <th>Talla</th>
                        <th>IMC</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($patologias as $patologia)
                            <tr>
                                <td>{{ $patologia->tipo_patologia }}</td>
                                <td>{{ $patologia->fecha_patologia }}</td>
                                <td>{{ $patologia->presion_arterial }}</td>
                                <td>{{ $patologia->peso_actual }}</td>
                                <td>{{ $patologia->talla_actual }}</td>
                                <td>{{ $patologia->imc }}</td>
                                <td>
                                    <a class="btn bg-gradient-secondary btn-sm disabled" data-toggle="tooltip"
                                       data-placement="bottom" title="Editar"
                                    href="{{ route('patologias.edit', $patologia->id) }}"><i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>--}}
            </div>
        </div>
    </div>
@endif
