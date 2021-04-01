@extends('adminlte::page')

@section('title', 'estadisticas')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P4. POBLACION EN CONTROLPROGRAMA DE SALUD CARDIOVASCULAR (PSCV)
                    </h3>
                </div>
                <div class="card-body">
                    <div class="col-md-12 table-responsive">
                        <h4 class="card-title text-bold mb-3">
                            SECCION A: PROGRAMA SALUD CARDIOVASCULAR (PSCV)
                        </h4>
                        <table id="pscv" class="table table-md-responsive table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">CONCEPTO</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="28">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                                <th rowspan="3">Pacientes Diabeticos</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">15 a 19 años</th>
                                <th nowrap="" colspan="2">20 a 24 años</th>
                                <th nowrap="" colspan="2">25 a 29 años</th>
                                <th nowrap="" colspan="2">30 a 34 años</th>
                                <th nowrap="" colspan="2">35 a 39 años</th>
                                <th nowrap="" colspan="2">40 a 44 años</th>
                                <th nowrap="" colspan="2">45 a 49 años</th>
                                <th nowrap="" colspan="2">50 a 54 años</th>
                                <th nowrap="" colspan="2">55 a 59 años</th>
                                <th nowrap="" colspan="2">60 a 64 años</th>
                                <th nowrap="" colspan="2">65 a 69 años</th>
                                <th nowrap="" colspan="2">70 a 74 años</th>
                                <th nowrap="" colspan="2">75 a 79 años</th>
                                <th nowrap="" colspan="2">80 y mas años</th>
                            </tr>
                            <tr>
                                <th>Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">NUMERO DE PERSONAS EN PSCV</th>
                                <td class="text-bold">{{ $total_pscv }}</td>
                                <td>{{ $masculino_pscv }}</td>
                                <td>{{ $femenino_pscv }}</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
