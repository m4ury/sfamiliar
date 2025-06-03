@extends('adminlte::page')

@section('title', 'seccion A.1 - B')

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    SECCIÓN A.1 CLASIFICACIÓN DE LAS FAMILIAS SECTOR RURAL
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-nowrap">
                            <tr>
                                <th class="text-bold">Clasificación de las familias por sector</th>
                                <th>TOTAL</th>
                                <th>Sector 1</th>
                                <th>Sector 2</th>
                                <th>Sector 3</th>
                                <th>Sector 4</th>
                                <th>Sector 5</th>
                                <th>Sector 6</th>
                                <th>Sector 7</th>
                                <th>Sector 8</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>N° Familias inscritas</td>
                                <td>{{ $familias->count() }}</td> {{-- Total families registered --}}
                                <td>{{ $familias->where('sector', '=', 'SA')->count() }}</td> {{-- Sector 1 --}}
                                <td>{{ $familias->where('sector', '=', 'SB')->count() }}</td> {{-- Sector 2 --}}
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>N° Familias evaluadas con cartola/encuesta familiar</td>
                                <td>{{ $familiasConEvaluacion->count() }}
                                </td> {{-- Total familias con evaluacion vigente --}}
                                <td>{{ $familiasConEvaluacion->where('sector', 'SA')->count() }}
                                </td>
                                {{-- Sector 1 --}}
                                <td>{{ $familiasConEvaluacion->where('sector', 'SB')->count() }}
                                </td>
                                {{-- Sector 2 --}}
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>N° De familias en riesgo bajo</td>
                                <td>
                                    {{ $familias->where('ultimaEvaluacion.resultado_evaluacion', 'Bajo')->count() }}
                                </td>
                                <td>
                                    {{ $familias->where('sector', 'SA')->where('ultimaEvaluacion.resultado_evaluacion', 'Bajo')->count() }}
                                </td>
                                <td>
                                    {{ $familias->where('sector', 'SB')->where('ultimaEvaluacion.resultado_evaluacion', 'Bajo')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>N° De familias en riesgo medio</td>
                                <td>
                                    {{ $familias->where('ultimaEvaluacion.resultado_evaluacion', 'Medio')->count() }}
                                </td>
                                <td>
                                    {{ $familias->where('sector', 'SA')->where('ultimaEvaluacion.resultado_evaluacion', 'Medio')->count() }}
                                </td>
                                <td>
                                    {{ $familias->where('sector', 'SB')->where('ultimaEvaluacion.resultado_evaluacion', 'Medio')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>N° De familias en riesgo alto</td>
                                <td>
                                    {{ $familias->where('ultimaEvaluacion.resultado_evaluacion', 'Alto')->count() }}
                                </td>
                                <td>
                                    {{ $familias->where('sector', 'SA')->where('ultimaEvaluacion.resultado_evaluacion', 'Alto')->count() }}
                                </td>
                                <td>
                                    {{ $familias->where('sector', 'SB')->where('ultimaEvaluacion.resultado_evaluacion', 'Alto')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    SECCIÓN B. INTERVENCIÓN EN FAMILIAS SECTOR URBANO Y RURAL
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-nowrap">
                            <tr>
                                <th colspan="2">Intervención en familias</th>
                                <th class="text-center">TOTAL</th>
                                <th>Sector 1</th>
                                <th>Sector 2</th>
                                <th>Sector 3</th>
                                <th>Sector 4</th>
                                <th>Sector 5</th>
                                <th>Sector 6</th>
                                <th>Sector 7</th>
                                <th>Sector 8</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Familias con plan de intervención --}}
                            <tr>
                                <th colspan="2">N° Familias con plan de intervención</th>
                                <td>{{ $familiasConPlan->count() }}</td>
                                <td>{{ $familiasConPlan->where('sector', 'SA')->count() }}</td>
                                <td>{{ $familiasConPlan->where('sector', 'SB')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">N° Familias sin plan de intervención</th>
                            <tr>
                                <th>Riesgo bajo</th>
                                <td>{{ $familiasSinPlanConEvaluacion->where('ultimaEvaluacion.resultado_evaluacion', 'Bajo')->count() }}
                                </td>
                                <td>{{ $familiasSinPlanConEvaluacion->where('sector', 'SA')->where('ultimaEvaluacion.resultado_evaluacion', 'Bajo')->count() }}
                                </td>
                                <td>{{ $familiasSinPlanConEvaluacion->where('sector', 'SB')->where('ultimaEvaluacion.resultado_evaluacion', 'Bajo')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Riesgo medio</th>
                                <td>{{ $familiasSinPlanConEvaluacion->where('ultimaEvaluacion.resultado_evaluacion', 'Medio')->count() }}
                                </td>
                                <td>{{ $familiasSinPlanConEvaluacion->where('sector', 'SA')->where('ultimaEvaluacion.resultado_evaluacion', 'Medio')->count() }}
                                </td>
                                <td>{{ $familiasSinPlanConEvaluacion->where('sector', 'SB')->where('ultimaEvaluacion.resultado_evaluacion', 'Medio')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Riesgo alto</th>
                                <td>{{ $familiasSinPlanConEvaluacion->where('ultimaEvaluacion.resultado_evaluacion', 'Alto')->count() }}
                                </td>
                                <td>{{ $familiasSinPlanConEvaluacion->where('sector', 'SA')->where('ultimaEvaluacion.resultado_evaluacion', 'Alto')->count() }}
                                </td>
                                <td>{{ $familiasSinPlanConEvaluacion->where('sector', 'SB')->where('ultimaEvaluacion.resultado_evaluacion', 'Alto')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle">N° Familias egresadas de planes de
                                    intervención</th>
                            <tr>
                                <th>Total de egresos</th>
                                <td>{{ $familiasConEgreso->count() }}</td>
                                <td>{{ $familiasConEgreso->where('sector', 'SA')->count() }}</td>
                                <td>{{ $familiasConEgreso->where('sector', 'SB')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Alta por cumplir plan de intervención</th>
                                <td>
                                    {{ $familiasConEgreso->flatMap->planes->where('motivo_egreso', 'Alta por cumplir plan de intervencion')->count() }}
                                </td>
                                <td>
                                    {{ $familiasConEgreso->where('sector', 'SA')->flatMap->planes->where('motivo_egreso', 'Alta por cumplir plan de intervencion')->count() }}
                                </td>
                                <td>
                                    {{ $familiasConEgreso->where('sector', 'SB')->flatMap->planes->where('motivo_egreso', 'Alta por cumplir plan de intervencion')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Traslado de establecimiento</th>
                                <td>
                                    {{ $familiasConEgreso->flatMap->planes->where('motivo_egreso', 'Traslado de establecimiento')->count() }}
                                </td>
                                <td>
                                    {{ $familiasConEgreso->where('sector', 'SA')->flatMap->planes->where('motivo_egreso', 'Traslado de establecimiento')->count() }}
                                </td>
                                <td>
                                    {{ $familiasConEgreso->where('sector', 'SB')->flatMap->planes->where('motivo_egreso', 'Traslado de establecimiento')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Derivación por complejidad del caso</th>
                                <td>
                                    {{ $familiasConEgreso->flatMap->planes->where('motivo_egreso', 'Derivación por complejidad del caso')->count() }}
                                </td>
                                <td>
                                    {{ $familiasConEgreso->where('sector', 'SA')->flatMap->planes->where('motivo_egreso', 'Derivación por complejidad del caso')->count() }}
                                </td>
                                <td>
                                    {{ $familiasConEgreso->where('sector', 'SB')->flatMap->planes->where('motivo_egreso', 'Derivación por complejidad del caso')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
