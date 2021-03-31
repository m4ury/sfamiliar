@extends('adminlte::page')

@section('title', 'controles-pcte')

@section('content')
    <div class="card card-primary card-outline row">
        <div class="card-header">
            <h3 class="card-title">
                <a href="{{ url('pacientes', $paciente->id) }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                <p class="text-bold text-uppercase my-2">Paciente: {{ $paciente->fullName(). ' - Rut.: ' .$paciente->rut}} </p>
            </h3>
        </div>
        <div class="card-body">
            <div class="col-md-12 table-responsive">
                <table id="controles" class="table table-hover table-md-responsive table-bordered">
                    <thead class="thead-light">
                    <tr>
                        <th>Profesional</th>
                        <th>Observacion</th>
                        <th>Fecha</th>
                        <th>Presion arterial</th>
                        <th>Peso</th>
                        <th>Talla</th>
                        <th>IMC</th>
                        <th>Est. Nutricional</th>
                        <th>Prox. Control</th>
                        {{--<th>Acciones</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($paciente->controls as $control)
                            <td>{{ $control->tipo_control }}</td>
                            <td>{{ $control->observacion }}</td>
                            <td>{{ \Carbon\Carbon::parse($control->fecha_control)->format("d-m-Y") }}</td>
                            <td>{{ $control->presion_arterial }}</td>
                            <td>{{ $control->peso_actual }}</td>
                            <td>{{ $control->talla_actual }}</td>
                            <td>{{ $control->imc }}</td>
                            <td>{{ $control->imc_resultado}}</td>
                            <td>{{ \Carbon\Carbon::parse($control->proximo_control)->format("d-m-Y") }}</td>
                            {{--<td>
                                <a class="btn bg-gradient-secondary btn-sm disabled" data-toggle="tooltip" data-placement="bottom"
                                   title="Editar"
                                   href="{{ route('controles.edit', $control->id) }}"><i class="fas fa-pen"></i></a></td>--}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

