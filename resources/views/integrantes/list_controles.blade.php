@if(!$familia->pacientes)
<div class="col-sm-6 mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nuevo integrante"
        href="{{ route('paci.create', $paciente->id) }}">
        <i class="fas fa-money-check-alt"></i>
        Nuevo control
    </a>
    @if (\Request::is('control/*'))
    <a class="btn bg-gradient-secondary btn-sm" title="Regresar" href="{{ route('pacientes.show', $paciente->id) }}">
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
                        <th>Pr. arterial</th>
                        <th>Peso</th>
                        <th>Talla</th>
                        <th>IMC</th>
                        <th>Est. nutricional</th>
                        <th>Observacion</th>
                        {{--<th>Ultimo del semestre?</th>--}}
                        <th>Prox. Control</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($controles as $control)
                    <tr>
                        <td>{{ $control->tipo_control }}</td>
                        <td>{{ \Carbon\Carbon::parse($control->fecha_control)->format("d-m-Y") }}</td>
                        <td>{{ $control->presion_arterial }}</td>
                        <td>{{ $control->peso_actual }}</td>
                        <td>{{ $control->talla_actual }}</td>
                        <td>{{ $control->imc }}</td>
                        <td>{{ $control->imc_resultado }}</td>
                        <td>{{ $control->observacion }}</td>
                        {{--@if($control->last == 1)
                        <td class="text-center"><i class="fas fa-check-circle text-green"></i></td>
                        @else
                        <td class="text-center"></td>
                        @endif--}}
                        <td>{{ \Carbon\Carbon::parse($control->proximo_control)->format("d-m-Y"). ' - '
                            .$control->prox_tipo ? : ''}}</td>

                        {!! Form::open(['route' => ['controles.destroy', $control->id], 'method' => 'DELETE']) !!}
                        <td><a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Editar" href="{{ url('controles/'.$control->id.'/editar') }}"><i
                                    class="fas fa-pen"></i></a>
                            {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title'
                            => 'Eliminar','onclick'=>'return confirm("seguro desea eliminar esta Control?")'] ) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
