@extends('adminlte::page')

@section('title', 'Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="col-md-12 table-responsive">
                        <table id="pscv" class="table table-md-responsive table-bordered">
                            <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">CONCEPTO</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="28">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Poblacion Migrantes</th>
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
                                <th rowspan="3" style="vertical-align: middle">PERSONAS BAJO CONTROL POR HIPERTENSION
                                </th>
                            <tr>
                                <th>PA < 140/90 mmHg</th>
                                {{--<td>{{ $p_moderado }}</td>
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
                                <td>{{$mod_80F}}</td>--}}
                            </tr>
                            <tr>
                                <th>PA < 150/90 mmHg</th>
                                {{--<td>{{ $p_alto }}</td>
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
                                <td>{{$alto_80F}}</td>--}}
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle">PERSONAS BAJO CONTROL POR DIABETES
                                    MELLITUS
                                </th>
                            <tr>
                                <th>HbA1C < 7%</th>
                                {{--<td>{{ $hta }}</td>
                                <td>{{ $htaM }}</td>
                                <td>{{ $htaF }}</td>
                                <td>{{$hta_1519M}}</td>
                                <td>{{$hta_1519F}}</td>
                                <td>{{$hta_2024M}}</td>
                                <td>{{$hta_2024F}}</td>
                                <td>{{$hta_2529M}}</td>
                                <td>{{$hta_2529F}}</td>
                                <td>{{$hta_3034M}}</td>
                                <td>{{$hta_3034F}}</td>
                                <td>{{$hta_3539M}}</td>
                                <td>{{$hta_3539F}}</td>
                                <td>{{$hta_4044M}}</td>
                                <td>{{$hta_4044F}}</td>
                                <td>{{$hta_4549M}}</td>
                                <td>{{$hta_4549F}}</td>
                                <td>{{$hta_5054M}}</td>
                                <td>{{$hta_5054F}}</td>
                                <td>{{$hta_5559M}}</td>
                                <td>{{$hta_5559F}}</td>
                                <td>{{$hta_6064M}}</td>
                                <td>{{$hta_6064F}}</td>
                                <td>{{$hta_6569M}}</td>
                                <td>{{$hta_6569F}}</td>
                                <td>{{$hta_7074M}}</td>
                                <td>{{$hta_7074F}}</td>
                                <td>{{$hta_7579M}}</td>
                                <td>{{$hta_7579F}}</td>
                                <td>{{$hta_80M}}</td>
                                <td>{{$hta_80F}}</td>--}}
                            </tr>
                            <tr>
                                <th>HbA1C < 8%</th>
                                {{--<td>{{ $dm2 }}</td>
                                <td>{{ $dm2M }}</td>
                                <td>{{ $dm2F }}</td>
                                <td>{{$dm2_1519M}}</td>
                                <td>{{$dm2_1519F}}</td>
                                <td>{{$dm2_2024M}}</td>
                                <td>{{$dm2_2024F}}</td>
                                <td>{{$dm2_2529M}}</td>
                                <td>{{$dm2_2529F}}</td>
                                <td>{{$dm2_3034M}}</td>
                                <td>{{$dm2_3034F}}</td>
                                <td>{{$dm2_3539M}}</td>
                                <td>{{$dm2_3539F}}</td>
                                <td>{{$dm2_4044M}}</td>
                                <td>{{$dm2_4044F}}</td>
                                <td>{{$dm2_4549M}}</td>
                                <td>{{$dm2_4549F}}</td>
                                <td>{{$dm2_5054M}}</td>
                                <td>{{$dm2_5054F}}</td>
                                <td>{{$dm2_5559M}}</td>
                                <td>{{$dm2_5559F}}</td>
                                <td>{{$dm2_6064M}}</td>
                                <td>{{$dm2_6064F}}</td>
                                <td>{{$dm2_6569M}}</td>
                                <td>{{$dm2_6569F}}</td>
                                <td>{{$dm2_7074M}}</td>
                                <td>{{$dm2_7074F}}</td>
                                <td>{{$dm2_7579M}}</td>
                                <td>{{$dm2_7579F}}</td>
                                <td>{{$dm2_80M}}</td>
                                <td>{{$dm2_80F}}</td>--}}
                            </tr>
                            <tr>
                                <th>HbA1C < 7% - PA < 140/90mmHg y Colesterol LDL < 100 mg/dl</th>
                                {{--<td>{{ $dlp }}</td>
                                <td>{{ $dlpM }}</td>
                                <td>{{ $dlpF }}</td>
                                <td>{{$dlp_1519M}}</td>
                                <td>{{$dlp_1519F}}</td>
                                <td>{{$dlp_2024M}}</td>
                                <td>{{$dlp_2024F}}</td>
                                <td>{{$dlp_2529M}}</td>
                                <td>{{$dlp_2529F}}</td>
                                <td>{{$dlp_3034M}}</td>
                                <td>{{$dlp_3034F}}</td>
                                <td>{{$dlp_3539M}}</td>
                                <td>{{$dlp_3539F}}</td>
                                <td>{{$dlp_4044M}}</td>
                                <td>{{$dlp_4044F}}</td>
                                <td>{{$dlp_4549M}}</td>
                                <td>{{$dlp_4549F}}</td>
                                <td>{{$dlp_5054M}}</td>
                                <td>{{$dlp_5054F}}</td>
                                <td>{{$dlp_5559M}}</td>
                                <td>{{$dlp_5559F}}</td>
                                <td>{{$dlp_6064M}}</td>
                                <td>{{$dlp_6064F}}</td>
                                <td>{{$dlp_6569M}}</td>
                                <td>{{$dlp_6569F}}</td>
                                <td>{{$dlp_7074M}}</td>
                                <td>{{$dlp_7074F}}</td>
                                <td>{{$dlp_7579M}}</td>
                                <td>{{$dlp_7579F}}</td>
                                <td>{{$dlp_80M}}</td>
                                <td>{{$dlp_80F}}</td>--}}
                            </tr>
                            <tr>
                                <th nowrap="">COLESTEROL LDL < 100 mg/dL</th>
                            <tr>
                                {{--<td>{{ $tbq }}</td>
                                <td>{{ $tbqM }}</td>
                                <td>{{ $tbqF }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$tbq_5559M}}</td>
                                <td>{{$tbq_5559F}}</td>
                                <td>{{$tbq_6064M}}</td>
                                <td>{{$tbq_6064F}}</td>
                                <td>{{$tbq_6569M}}</td>
                                <td>{{$tbq_6569F}}</td>
                                <td>{{$tbq_7074M}}</td>
                                <td>{{$tbq_7074F}}</td>
                                <td>{{$tbq_7579M}}</td>
                                <td>{{$tbq_7579F}}</td>
                                <td>{{$tbq_80M}}</td>
                                <td>{{$tbq_80F}}</td>--}}
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="2" style="vertical-align: middle">PERSONAS BAJO CONTROL con antecedentes
                                    Enfermedad Cardiovascular (ECV)
                                </th>

                                <th nowrap="">En tratamiento con Acido Acetilsalicílico</th>
                                {{--<td>{{ $s_erc }}</td>
                                <td>{{ $s_ercM }}</td>
                                <td>{{ $s_ercF }}</td>
                                <td>{{$s_erc_1519M}}</td>
                                <td>{{$s_erc_1519F}}</td>
                                <td>{{$s_erc_2024M}}</td>
                                <td>{{$s_erc_2024F}}</td>
                                <td>{{$s_erc_2529M}}</td>
                                <td>{{$s_erc_2529F}}</td>
                                <td>{{$s_erc_3034M}}</td>
                                <td>{{$s_erc_3034F}}</td>
                                <td>{{$s_erc_3539M}}</td>
                                <td>{{$s_erc_3539F}}</td>
                                <td>{{$s_erc_4044M}}</td>
                                <td>{{$s_erc_4044F}}</td>
                                <td>{{$s_erc_4549M}}</td>
                                <td>{{$s_erc_4549F}}</td>
                                <td>{{$s_erc_5054M}}</td>
                                <td>{{$s_erc_5054F}}</td>
                                <td>{{$s_erc_5559M}}</td>
                                <td>{{$s_erc_5559F}}</td>
                                <td>{{$s_erc_6064M}}</td>
                                <td>{{$s_erc_6064F}}</td>
                                <td>{{$s_erc_6569M}}</td>
                                <td>{{$s_erc_6569F}}</td>
                                <td>{{$s_erc_7074M}}</td>
                                <td>{{$s_erc_7074F}}</td>
                                <td>{{$s_erc_7579M}}</td>
                                <td>{{$s_erc_7579F}}</td>
                                <td>{{$s_erc_80M}}</td>
                                <td>{{$s_erc_80F}}</td>--}}
                            </tr>
                            <tr>
                                <th nowrap="">En tratamiento con Estatina</th>
                                {{--<td>{{ $ercI_II }}</td>
                                <td>{{ $ercI_IIM }}</td>
                                <td>{{ $ercI_IIF }}</td>
                                <td>{{$ercI_II_1519M}}</td>
                                <td>{{$ercI_II_1519F}}</td>
                                <td>{{$ercI_II_2024M}}</td>
                                <td>{{$ercI_II_2024F}}</td>
                                <td>{{$ercI_II_2529M}}</td>
                                <td>{{$ercI_II_2529F}}</td>
                                <td>{{$ercI_II_3034M}}</td>
                                <td>{{$ercI_II_3034F}}</td>
                                <td>{{$ercI_II_3539M}}</td>
                                <td>{{$ercI_II_3539F}}</td>
                                <td>{{$ercI_II_4044M}}</td>
                                <td>{{$ercI_II_4044F}}</td>
                                <td>{{$ercI_II_4549M}}</td>
                                <td>{{$ercI_II_4549F}}</td>
                                <td>{{$ercI_II_5054M}}</td>
                                <td>{{$ercI_II_5054F}}</td>
                                <td>{{$ercI_II_5559M}}</td>
                                <td>{{$ercI_II_5559F}}</td>
                                <td>{{$ercI_II_6064M}}</td>
                                <td>{{$ercI_II_6064F}}</td>
                                <td>{{$ercI_II_6569M}}</td>
                                <td>{{$ercI_II_6569F}}</td>
                                <td>{{$ercI_II_7074M}}</td>
                                <td>{{$ercI_II_7074F}}</td>
                                <td>{{$ercI_II_7579M}}</td>
                                <td>{{$ercI_II_7579F}}</td>
                                <td>{{$ercI_II_80M}}</td>
                                <td>{{$ercI_II_80F}}</td>--}}
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
