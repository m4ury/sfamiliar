@if($paciente->controls)
    <div class="col-sm-6 mb-2">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo control"
           href="{{ route('controles.create', $paciente->id) }}">
            <i class="fas fa-money-check-alt"></i>
            Nuevo control
        </a>
        @if (\Request::is('control/*'))
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
                <table class="table table-hover table-md-responsive table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Profesional</th>
                        <th>Fecha</th>
                        <th>Presion arterial</th>
                        <th>Peso</th>
                        <th>Talla</th>
                        <th>IMC</th>
                        <th>Estado nutricional</th>
                        <th>Prox. Control</th>
                        {{--<th>Acciones</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($controles as $control)
                        {{-- {{ dd($control) }}--}}
                        <tr>
                            <td>{{ $control->tipo_control }}</td>
                            <td>{{ \Carbon\Carbon::parse($control->fecha_control)->format("d-m-Y") }}</td>
                            <td>{{ $control->presion_arterial }}</td>
                            <td>{{ $control->peso_actual }}</td>
                            <td>{{ $control->talla_actual }}</td>
                            <td>{{ $control->imc }}</td>
                            <td>{{ $control->imc_resultado }}</td>
                            <td>{{ \Carbon\Carbon::parse($control->proximo_control)->format("d-m-Y"). ' - ' .$control->prox_tipo ? : ''}}</td>

                            {{--<td>
                                <a class="btn bg-gradient-secondary btn-sm disabled" data-toggle="tooltip"
                                   data-placement="bottom" title="Editar"
                                href="{{ route('controles.edit', $control->id) }}"><i class="fas fa-pen"></i>
                                </a>
                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
