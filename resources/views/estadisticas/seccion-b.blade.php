@extends('adminlte::page')

@section('title', 'Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCIÓN B: METAS DE COMPENSACIÓN
                </h4>
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
                            <th rowspan="3" style="vertical-align: middle">PERSONAS BAJO CONTROL POR
                                HIPERTENSION
                            </th>
                        <tr>
                            <th>PA < 140/90 mmHg</th>
                            <td>{{ $pa140_90 }}</td>
                            <td>{{ $pa140_90M }}</td>
                            <td>{{ $pa140_90F }}</td>
                            <td>{{$pa140_1519M}}</td>
                            <td>{{$pa140_1519F}}</td>
                            <td>{{$pa140_2024M}}</td>
                            <td>{{$pa140_2024F}}</td>
                            <td>{{$pa140_2529M}}</td>
                            <td>{{$pa140_2529F}}</td>
                            <td>{{$pa140_3034M}}</td>
                            <td>{{$pa140_3034F}}</td>
                            <td>{{$pa140_3539M}}</td>
                            <td>{{$pa140_3539F}}</td>
                            <td>{{$pa140_4044M}}</td>
                            <td>{{$pa140_4044F}}</td>
                            <td>{{$pa140_4549M}}</td>
                            <td>{{$pa140_4549F}}</td>
                            <td>{{$pa140_5054M}}</td>
                            <td>{{$pa140_5054F}}</td>
                            <td>{{$pa140_5559M}}</td>
                            <td>{{$pa140_5559F}}</td>
                            <td>{{$pa140_6064M}}</td>
                            <td>{{$pa140_6064F}}</td>
                            <td>{{$pa140_6569M}}</td>
                            <td>{{$pa140_6569F}}</td>
                            <td>{{$pa140_7074M}}</td>
                            <td>{{$pa140_7074F}}</td>
                            <td>{{$pa140_7579M}}</td>
                            <td>{{$pa140_7579F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>PA < 150/90 mmHg</th>
                            <td>{{ $pa150 }}</td>
                            <td>{{ $pa150M }}</td>
                            <td>{{ $pa150F }}</td>
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
                            <td>{{ $pa150M }}</td>
                            <td>{{ $pa150F }}</td>
                        </tr>
                        <tr>
                        <th rowspan="5" style="vertical-align: middle">PERSONAS BAJO CONTROL POR DIABETES
                            MELLITUS
                        </th>
                        <tr>
                            <th>HbA1C < 7%</th>
                            <td>{{ $hbac17 }}</td>
                            <td>{{ $hbac17M }}</td>
                            <td>{{ $hbac17F }}</td>
                            <td>{{$hbac17_1519M}}</td>
                            <td>{{$hbac17_1519F}}</td>
                            <td>{{$hbac17_2024M}}</td>
                            <td>{{$hbac17_2024F}}</td>
                            <td>{{$hbac17_2529M}}</td>
                            <td>{{$hbac17_2529F}}</td>
                            <td>{{$hbac17_3034M}}</td>
                            <td>{{$hbac17_3034F}}</td>
                            <td>{{$hbac17_3539M}}</td>
                            <td>{{$hbac17_3539F}}</td>
                            <td>{{$hbac17_4044M}}</td>
                            <td>{{$hbac17_4044F}}</td>
                            <td>{{$hbac17_4549M}}</td>
                            <td>{{$hbac17_4549F}}</td>
                            <td>{{$hbac17_5054M}}</td>
                            <td>{{$hbac17_5054F}}</td>
                            <td>{{$hbac17_5559M}}</td>
                            <td>{{$hbac17_5559F}}</td>
                            <td>{{$hbac17_6064M}}</td>
                            <td>{{$hbac17_6064F}}</td>
                            <td>{{$hbac17_6569M}}</td>
                            <td>{{$hbac17_6569F}}</td>
                            <td>{{$hbac17_7074M}}</td>
                            <td>{{$hbac17_7074F}}</td>
                            <td>{{$hbac17_7579M}}</td>
                            <td>{{$hbac17_7579F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>HbA1C < 8%</th>
                            <td>{{ $hbac18 }}</td>
                            <td>{{ $hbac18M }}</td>
                            <td>{{ $hbac18F }}</td>
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
                            <td>{{ $hbac18M }}</td>
                            <td>{{ $hbac18F }}</td>
                        </tr>
                        <tr>
                        <th>HbA1C < 7% - PA < 140/90mmHg y Colesterol LDL < 100 mg/dl</th>
                            <td>{{ $hbac17Pa140Ldl100 }}</td>
                            <td>{{ $hbac17Pa140Ldl100M }}</td>
                            <td>{{ $hbac17Pa140Ldl100F }}</td>
                            <td>{{$hbac17Pa140Ldl100_1519M}}</td>
                            <td>{{$hbac17Pa140Ldl100_1519F}}</td>
                            <td>{{$hbac17Pa140Ldl100_2024M}}</td>
                            <td>{{$hbac17Pa140Ldl100_2024F}}</td>
                            <td>{{$hbac17Pa140Ldl100_2529M}}</td>
                            <td>{{$hbac17Pa140Ldl100_2529F}}</td>
                            <td>{{$hbac17Pa140Ldl100_3034M}}</td>
                            <td>{{$hbac17Pa140Ldl100_3034F}}</td>
                            <td>{{$hbac17Pa140Ldl100_3539M}}</td>
                            <td>{{$hbac17Pa140Ldl100_3539F}}</td>
                            <td>{{$hbac17Pa140Ldl100_4044M}}</td>
                            <td>{{$hbac17Pa140Ldl100_4044F}}</td>
                            <td>{{$hbac17Pa140Ldl100_4549M}}</td>
                            <td>{{$hbac17Pa140Ldl100_4549F}}</td>
                            <td>{{$hbac17Pa140Ldl100_5054M}}</td>
                            <td>{{$hbac17Pa140Ldl100_5054F}}</td>
                            <td>{{$hbac17Pa140Ldl100_5559M}}</td>
                            <td>{{$hbac17Pa140Ldl100_5559F}}</td>
                            <td>{{$hbac17Pa140Ldl100_6064M}}</td>
                            <td>{{$hbac17Pa140Ldl100_6064F}}</td>
                            <td>{{$hbac17Pa140Ldl100_6569M}}</td>
                            <td>{{$hbac17Pa140Ldl100_6569F}}</td>
                            <td>{{$hbac17Pa140Ldl100_7074M}}</td>
                            <td>{{$hbac17Pa140Ldl100_7074F}}</td>
                            <td>{{$hbac17Pa140Ldl100_7579M}}</td>
                            <td>{{$hbac17Pa140Ldl100_7579F}}</td>
                            <td>{{$hbac17Pa140Ldl100_80M}}</td>
                            <td>{{$hbac17Pa140Ldl100_80F}}</td>
                        </tr>
                        <tr>
                        <th nowrap="">COLESTEROL LDL < 100 mg/dL</th>
                            <td>{{ $ldl100 }}</td>
                            <td>{{ $ldl100M }}</td>
                            <td>{{ $ldl100F }}</td>
                            <td>{{$ldl100_1519M}}</td>
                            <td>{{$ldl100_1519F}}</td>
                            <td>{{$ldl100_2024M}}</td>
                            <td>{{$ldl100_2024F}}</td>
                            <td>{{$ldl100_2529M}}</td>
                            <td>{{$ldl100_2529F}}</td>
                            <td>{{$ldl100_3034M}}</td>
                            <td>{{$ldl100_3034F}}</td>
                            <td>{{$ldl100_3539M}}</td>
                            <td>{{$ldl100_3539F}}</td>
                            <td>{{$ldl100_4044M}}</td>
                            <td>{{$ldl100_4044F}}</td>
                            <td>{{$ldl100_4549M}}</td>
                            <td>{{$ldl100_4549F}}</td>
                            <td>{{$ldl100_5054M}}</td>
                            <td>{{$ldl100_5054F}}</td>
                            <td>{{$ldl100_5559M}}</td>
                            <td>{{$ldl100_5559F}}</td>
                            <td>{{$ldl100_6064M}}</td>
                            <td>{{$ldl100_6064F}}</td>
                            <td>{{$ldl100_6569M}}</td>
                            <td>{{$ldl100_6569F}}</td>
                            <td>{{$ldl100_7074M}}</td>
                            <td>{{$ldl100_7074F}}</td>
                            <td>{{$ldl100_7579M}}</td>
                            <td>{{$ldl100_7579F}}</td>
                            <td>{{$ldl100_80M}}</td>
                            <td>{{$ldl100_80F}}</td>
                        </tr>
                        <tr>
                            <th rowspan="2" style="vertical-align: middle">PERSONAS BAJO CONTROL con
                                antecedentes
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
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
