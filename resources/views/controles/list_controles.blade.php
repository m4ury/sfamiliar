@if($controles)
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
                        <th>Tipo Control</th>
                        <th>Fecha</th>
                        <th>Peso</th>
                        <th>Talla</th>
                        <th>IMC</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($controles as $control)
                            <tr>
                                <td>{{ $control->tipo_control }}</td>
                                <td>{{ $control->fecha_control }}</td>
                                <td>${{ $control->peso_actual }}</td>
                                <td>${{ $control->talla_actual }}</td>
                                <td>${{ $control->imc }}</td>
                                <td>
                                    <a class="btn bg-gradient-secondary btn-sm disabled" data-toggle="tooltip"
                                       data-placement="bottom" title="Editar"
                                    href="{{ route('controles.edit', $control->id) }}"><i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
