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
                                <td>{{ $total_pscv }}</td>
                                <td>{{ $m_pscv }}</td>
                                <td>{{ $f_pscv }}</td>
                                <td>{{$pscv_1519M}}</td>
                                <td>{{$pscv_1519F}}</td>
                                <td>{{$pscv_2024M}}</td>
                                <td>{{$pscv_2024F}}</td>
                                <td>{{$pscv_2529M}}</td>
                                <td>{{$pscv_2529F}}</td>
                                <td>{{$pscv_3034M}}</td>
                                <td>{{$pscv_3034F}}</td>
                                <td>{{$pscv_3539M}}</td>
                                <td>{{$pscv_3539F}}</td>
                                <td>{{$pscv_4044M}}</td>
                                <td>{{$pscv_4044F}}</td>
                                <td>{{$pscv_4549M}}</td>
                                <td>{{$pscv_4549F}}</td>
                                <td>{{$pscv_5054M}}</td>
                                <td>{{$pscv_5054F}}</td>
                                <td>{{$pscv_5559M}}</td>
                                <td>{{$pscv_5559F}}</td>
                                <td>{{$pscv_6064M}}</td>
                                <td>{{$pscv_6064F}}</td>
                                <td>{{$pscv_6569M}}</td>
                                <td>{{$pscv_6569F}}</td>
                                <td>{{$pscv_7074M}}</td>
                                <td>{{$pscv_7074F}}</td>
                                <td>{{$pscv_7579M}}</td>
                                <td>{{$pscv_7579F}}</td>
                                <td>{{$pscv_80M}}</td>
                                <td>{{$pscv_80F}}</td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">CLASIFICACION DEL RIESGO
                                    CARDIOVASCULAR
                                </th>
                            <tr>
                                <th>BAJO</th>
                                <td>{{ $p_bajo }}</td>
                                <td>{{ $p_bajoM }}</td>
                                <td>{{ $p_bajoF }}</td>
                                <td>{{$bajo_1519M}}</td>
                                <td>{{$bajo_1519F}}</td>
                                <td>{{$bajo_2024M}}</td>
                                <td>{{$bajo_2024F}}</td>
                                <td>{{$bajo_2529M}}</td>
                                <td>{{$bajo_2529F}}</td>
                                <td>{{$bajo_3034M}}</td>
                                <td>{{$bajo_3034F}}</td>
                                <td>{{$bajo_3539M}}</td>
                                <td>{{$bajo_3539F}}</td>
                                <td>{{$bajo_4044M}}</td>
                                <td>{{$bajo_4044F}}</td>
                                <td>{{$bajo_4549M}}</td>
                                <td>{{$bajo_4549F}}</td>
                                <td>{{$bajo_5054M}}</td>
                                <td>{{$bajo_5054F}}</td>
                                <td>{{$bajo_5559M}}</td>
                                <td>{{$bajo_5559F}}</td>
                                <td>{{$bajo_6064M}}</td>
                                <td>{{$bajo_6064F}}</td>
                                <td>{{$bajo_6569M}}</td>
                                <td>{{$bajo_6569F}}</td>
                                <td>{{$bajo_7074M}}</td>
                                <td>{{$bajo_7074F}}</td>
                                <td>{{$bajo_7579M}}</td>
                                <td>{{$bajo_7579F}}</td>
                                <td>{{$bajo_80M}}</td>
                                <td>{{$bajo_80F}}</td>
                            </tr>
                            <tr>
                                <th>MODERADO</th>
                                <td>{{ $p_moderado }}</td>
                                <td>{{ $p_moderadoM }}</td>
                                <td>{{ $p_moderadoF }}</td>
                                <td>{{$mod_1519M}}</td>
                                <td>{{$mod_1519F}}</td>
                                <td>{{$mod_2024M}}</td>
                                <td>{{$mod_2024F}}</td>
                                <td>{{$mod_2529M}}</td>
                                <td>{{$mod_2529F}}</td>
                                <td>{{$mod_3034M}}</td>
                                <td>{{$mod_3034F}}</td>
                                <td>{{$mod_3539M}}</td>
                                <td>{{$mod_3539F}}</td>
                                <td>{{$mod_4044M}}</td>
                                <td>{{$mod_4044F}}</td>
                                <td>{{$mod_4549M}}</td>
                                <td>{{$mod_4549F}}</td>
                                <td>{{$mod_5054M}}</td>
                                <td>{{$mod_5054F}}</td>
                                <td>{{$mod_5559M}}</td>
                                <td>{{$mod_5559F}}</td>
                                <td>{{$mod_6064M}}</td>
                                <td>{{$mod_6064F}}</td>
                                <td>{{$mod_6569M}}</td>
                                <td>{{$mod_6569F}}</td>
                                <td>{{$mod_7074M}}</td>
                                <td>{{$mod_7074F}}</td>
                                <td>{{$mod_7579M}}</td>
                                <td>{{$mod_7579F}}</td>
                                <td>{{$mod_80M}}</td>
                                <td>{{$mod_80F}}</td>
                            </tr>
                            <tr>
                                <th>ALTO</th>
                                <td>{{ $p_alto }}</td>
                                <td>{{ $p_altoM }}</td>
                                <td>{{ $p_altoF }}</td>
                                <td>{{$alto_1519M}}</td>
                                <td>{{$alto_1519F}}</td>
                                <td>{{$alto_2024M}}</td>
                                <td>{{$alto_2024F}}</td>
                                <td>{{$alto_2529M}}</td>
                                <td>{{$alto_2529F}}</td>
                                <td>{{$alto_3034M}}</td>
                                <td>{{$alto_3034F}}</td>
                                <td>{{$alto_3539M}}</td>
                                <td>{{$alto_3539F}}</td>
                                <td>{{$alto_4044M}}</td>
                                <td>{{$alto_4044F}}</td>
                                <td>{{$alto_4549M}}</td>
                                <td>{{$alto_4549F}}</td>
                                <td>{{$alto_5054M}}</td>
                                <td>{{$alto_5054F}}</td>
                                <td>{{$alto_5559M}}</td>
                                <td>{{$alto_5559F}}</td>
                                <td>{{$alto_6064M}}</td>
                                <td>{{$alto_6064F}}</td>
                                <td>{{$alto_6569M}}</td>
                                <td>{{$alto_6569F}}</td>
                                <td>{{$alto_7074M}}</td>
                                <td>{{$alto_7074F}}</td>
                                <td>{{$alto_7579M}}</td>
                                <td>{{$alto_7579F}}</td>
                                <td>{{$alto_80M}}</td>
                                <td>{{$alto_80F}}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="7" style="vertical-align: middle">PERSONAS BAJO CONTROL SEGÚN PATOLOGÍA Y
                                    FACTORES DE RIESGO
                                    (EXISTENCIA)
                                </th>
                            <tr>
                                <th>HIPERTENSOS</th>
                                <td>{{ $hta }}</td>
                                <td>{{ $htaM }}</td>
                                <td>{{ $htaF }}</td>

                            </tr>
                            <tr>
                                <th>DIABETICOS</th>
                                <td>{{ $dm2 }}</td>
                                <td>{{ $dm2M }}</td>
                                <td>{{ $dm2F }}</td>
                            </tr>
                            <tr>
                                <th>DISLIPIDEMICOS</th>
                                <td>{{ $dlp }}</td>
                                <td>{{ $dlpM }}</td>
                                <td>{{ $dlpF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TABAQUISMO MAYOR A 55 AÑOS</th>
                                <td disabled=""></td>
                                <td disabled=""></td>
                                <td disabled=""></td>
                            </tr>
                            <tr>
                                <th nowrap="">ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO (IAM)</th>
                                <td>{{ $iam }}</td>
                                <td>{{ $iamM }}</td>
                                <td>{{ $iamF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ANTECEDENTES DE ENF. CEREBRO VASCULAR</th>
                                <td>{{ $acv }}</td>
                                <td>{{ $acvM }}</td>
                                <td>{{ $acvF }}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="7" style="vertical-align: middle">DETECCIÓN Y PREVENCION DE LA PROGRESION
                                    DE LA ENFERMEDAD RENAL CRÓNICA (ERC).
                                </th>
                            <tr>
                                <th nowrap="">SIN ENFERMEDAD RENAL (S/ERC)</th>
                                <td>{{ $s_erc }}</td>
                                <td>{{ $s_ercM }}</td>
                                <td>{{ $s_ercF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G1 Y ETAPA G2 (VFG > 60 ml/min)</th>
                                <td>{{ $ercI_II }}</td>
                                <td>{{ $ercI_IIM }}</td>
                                <td>{{ $ercI_IIF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G3a (VFG > 45 a 59 ml/min)</th>
                                <td>{{ $ercIIIa }}</td>
                                <td>{{ $ercIIIaM }}</td>
                                <td>{{ $ercIIIaF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G3b (VFG > 30 a 44 ml/min)</th>
                                <td>{{ $ercIIIb }}</td>
                                <td>{{ $ercIIIbM }}</td>
                                <td>{{ $ercIIIbF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G4 (VFG > 15 a 29 ml/min)</th>
                                <td>{{ $ercIV }}</td>
                                <td>{{ $ercIVM }}</td>
                                <td>{{ $ercIVF }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G5 (VFG < 15 ml/min)</th>
                                <td>{{ $ercV }}</td>
                                <td>{{ $ercVM }}</td>
                                <td>{{ $ercVF }}</td>
                            </tr>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
