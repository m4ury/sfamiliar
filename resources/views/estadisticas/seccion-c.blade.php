@extends('adminlte::page')

@section('title', 'REM P4: Seccion C')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                SECCIÓN C: VARIABLES DE SEGUIMIENTO DEL PSCV AL CORTE
            </h4>
            <div class="col-md-12 table-responsive">
                <table class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">VARIABLES</th>
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
                            <th class="text-left bg-gradient-gray" colspan="2">PERSONAS DIABETICAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>{{ $racVigente }}</td>
                            <td>{{ $racVigenteM }}</td>
                            <td>{{ $racVigenteF }}</td>
                            <td>{{$racVigente_1519M}}</td>
                            <td>{{$racVigente_1519F}}</td>
                            <td>{{$racVigente_2024M}}</td>
                            <td>{{$racVigente_2024F}}</td>
                            <td>{{$racVigente_2529M}}</td>
                            <td>{{$racVigente_2529F}}</td>
                            <td>{{$racVigente_3034M}}</td>
                            <td>{{$racVigente_3034F}}</td>
                            <td>{{$racVigente_3539M}}</td>
                            <td>{{$racVigente_3539F}}</td>
                            <td>{{$racVigente_4044M}}</td>
                            <td>{{$racVigente_4044F}}</td>
                            <td>{{$racVigente_4549M}}</td>
                            <td>{{$racVigente_4549F}}</td>
                            <td>{{$racVigente_5054M}}</td>
                            <td>{{$racVigente_5054F}}</td>
                            <td>{{$racVigente_5559M}}</td>
                            <td>{{$racVigente_5559F}}</td>
                            <td>{{$racVigente_6064M}}</td>
                            <td>{{$racVigente_6064F}}</td>
                            <td>{{$racVigente_6569M}}</td>
                            <td>{{$racVigente_6569F}}</td>
                            <td>{{$racVigente_7074M}}</td>
                            <td>{{$racVigente_7074F}}</td>
                            <td>{{$racVigente_7579M}}</td>
                            <td>{{$racVigente_7579F}}</td>
                            <td>{{$racVigente_80M}}</td>
                            <td>{{$racVigente_80F}}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG), VIGENTE</th>
                            <td>{{ $vfgVigente }}</td>
                            <td>{{ $vfgVigenteM }}</td>
                            <td>{{ $vfgVigenteF }}</td>
                            <td>{{$vfgVigente_1519M}}</td>
                            <td>{{$vfgVigente_1519F}}</td>
                            <td>{{$vfgVigente_2024M}}</td>
                            <td>{{$vfgVigente_2024F}}</td>
                            <td>{{$vfgVigente_2529M}}</td>
                            <td>{{$vfgVigente_2529F}}</td>
                            <td>{{$vfgVigente_3034M}}</td>
                            <td>{{$vfgVigente_3034F}}</td>
                            <td>{{$vfgVigente_3539M}}</td>
                            <td>{{$vfgVigente_3539F}}</td>
                            <td>{{$vfgVigente_4044M}}</td>
                            <td>{{$vfgVigente_4044F}}</td>
                            <td>{{$vfgVigente_4549M}}</td>
                            <td>{{$vfgVigente_4549F}}</td>
                            <td>{{$vfgVigente_5054M}}</td>
                            <td>{{$vfgVigente_5054F}}</td>
                            <td>{{$vfgVigente_5559M}}</td>
                            <td>{{$vfgVigente_5559F}}</td>
                            <td>{{$vfgVigente_6064M}}</td>
                            <td>{{$vfgVigente_6064F}}</td>
                            <td>{{$vfgVigente_6569M}}</td>
                            <td>{{$vfgVigente_6569F}}</td>
                            <td>{{$vfgVigente_7074M}}</td>
                            <td>{{$vfgVigente_7074F}}</td>
                            <td>{{$vfgVigente_7579M}}</td>
                            <td>{{$vfgVigente_7579F}}</td>
                            <td>{{$vfgVigente_80M}}</td>
                            <td>{{$vfgVigente_80F}}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON FONDO DE OJO, VIGENTE</th>
                            <td>{{ $fondoOjoVigente }}</td>
                            <td>{{ $fondoOjoVigenteM }}</td>
                            <td>{{ $fondoOjoVigenteF }}</td>
                            <td>{{$fondoOjoVigente_1519M}}</td>
                            <td>{{$fondoOjoVigente_1519F}}</td>
                            <td>{{$fondoOjoVigente_2024M}}</td>
                            <td>{{$fondoOjoVigente_2024F}}</td>
                            <td>{{$fondoOjoVigente_2529M}}</td>
                            <td>{{$fondoOjoVigente_2529F}}</td>
                            <td>{{$fondoOjoVigente_3034M}}</td>
                            <td>{{$fondoOjoVigente_3034F}}</td>
                            <td>{{$fondoOjoVigente_3539M}}</td>
                            <td>{{$fondoOjoVigente_3539F}}</td>
                            <td>{{$fondoOjoVigente_4044M}}</td>
                            <td>{{$fondoOjoVigente_4044F}}</td>
                            <td>{{$fondoOjoVigente_4549M}}</td>
                            <td>{{$fondoOjoVigente_4549F}}</td>
                            <td>{{$fondoOjoVigente_5054M}}</td>
                            <td>{{$fondoOjoVigente_5054F}}</td>
                            <td>{{$fondoOjoVigente_5559M}}</td>
                            <td>{{$fondoOjoVigente_5559F}}</td>
                            <td>{{$fondoOjoVigente_6064M}}</td>
                            <td>{{$fondoOjoVigente_6064F}}</td>
                            <td>{{$fondoOjoVigente_6569M}}</td>
                            <td>{{$fondoOjoVigente_6569F}}</td>
                            <td>{{$fondoOjoVigente_7074M}}</td>
                            <td>{{$fondoOjoVigente_7074F}}</td>
                            <td>{{$fondoOjoVigente_7579M}}</td>
                            <td>{{$fondoOjoVigente_7579F}}</td>
                            <td>{{$fondoOjoVigente_80M}}</td>
                            <td>{{$fondoOjoVigente_80F}}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON ATENCIÓN PODOLÓGICA VIGENTE</th>
                            <td>
                                {{ $controlPodologico_alDia }}
                            </td>
                            <td>
                                {{ $controlPodologico_alDia_1564 }}
                            </td>
                            <td>
                                {{ $controlPodologico_alDia_65 }}
                            </td>
                            <td>
                                {{ $controlPodologico_alDiaM }}
                            </td>
                            <td>
                                {{ $controlPodologico_alDiaF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">CON ECG VIGENTE</th>
                            <td>
                                {{ $ecgVigente }}
                            </td>
                            <td>
                                {{ $ecgVigente_1564 }}
                            </td>
                            <td>
                                {{ $ecgVigente_65 }}
                            </td>
                            <td>
                                {{ $ecgVigenteM }}
                            </td>
                            <td>
                                {{ $ecgVigenteF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON INSULINA</th>
                            <td>
                                {{ $usoInsulina }}
                            </td>
                            <td>
                                {{ $usoInsulina_1564 }}
                            </td>
                            <td>
                                {{ $usoInsulina_65 }}
                            </td>
                            <td>
                                {{ $usoInsulinaM }}
                            </td>
                            <td>
                                {{ $usoInsulinaF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON INSULINA QUE LOGRA META CON HbA1C SEGÚN EDAD</th>
                            <td>
                                {{ $insulinaHba1C }}
                            </td>
                            <td>
                                {{ $insulinaHba1C_1564 }}
                            </td>
                            <td>
                                {{ $insulinaHba1C_65 }}
                            </td>
                            <td>
                                {{ $insulinaHba1CM }}
                            </td>
                            <td>
                                {{ $insulinaHba1CF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">CON HbA1C >= 9 %</th>
                            <td>
                                {{ $hba1cMayorIgual9Porcent }}
                            </td>
                            <td>
                                {{ $hba1cMayorIgual9Porcent_1564 }}
                            </td>
                            <td>
                                {{ $hba1cMayorIgual9Porcent_65 }}
                            </td>
                            <td>
                                {{ $hba1cMayorIgual9PorcentM }}
                            </td>
                            <td>
                                {{ $hba1cMayorIgual9PorcentF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON IECA O ARA II.</th>
                            <td>
                                {{ $usoIecaAraII }}
                            </td>
                            <td>
                                {{ $usoIecaAraII_1564 }}
                            </td>
                            <td>
                                {{ $usoIecaAraII_65 }}
                            </td>
                            <td>
                                {{ $usoIecaAraIIM }}
                            </td>
                            <td>
                                {{ $usoIecaAraIIF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">CON UN EXÁMEN DE COLESTEROL LDL VIGENTE.</th>
                            <td>
                                {{ $ldlVigente }}
                            </td>
                            <td>
                                {{ $ldlVigente_1564 }}
                            </td>
                            <td>
                                {{ $ldlVigente_65 }}
                            </td>
                            <td>
                                {{ $ldlVigenteM }}
                            </td>
                            <td>
                                {{ $ldlVigenteF }}
                            </td>
                        </tr>
                        <tr>
                            <th rowspan="5" style="vertical-align: middle">
                                CON *EVALUACIÓN VIGENTE DEL PIE SEGÚN PAUTA DE ESTIMACION DEL RIESGO DE ULCERACION EN
                                PERSONAS CON DIABETES
                            </th>
                        <tr>
                            <th nowrap="">Riesgo Bajo</th>
                            <td>
                                {{ $evaluacionPie_bajo }}
                            </td>
                            <td>
                                {{ $evaluacionPie_bajo_1564 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_bajo_65 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_bajoM }}
                            </td>
                            <td>
                                {{ $evaluacionPie_bajoF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Moderado</th>
                            <td>
                                {{ $evaluacionPie_moderado }}
                            </td>
                            <td>
                                {{ $evaluacionPie_moderado_1564 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_moderado_65 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_moderadoM }}
                            </td>
                            <td>
                                {{ $evaluacionPie_moderadoF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Alto</th>
                            <td>
                                {{ $evaluacionPie_alto }}
                            </td>
                            <td>
                                {{ $evaluacionPie_alto_1564 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_alto_65 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_altoM }}
                            </td>
                            <td>
                                {{ $evaluacionPie_altoF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Maximo</th>
                            <td>
                                {{ $evaluacionPie_maximo }}
                            </td>
                            <td>
                                {{ $evaluacionPie_maximo_1564 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_maximo_65 }}
                            </td>
                            <td>
                                {{ $evaluacionPie_maximoM }}
                            </td>
                            <td>
                                {{ $evaluacionPie_maximoF }}
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="3" style="vertical-align: middle">
                                CON ÚLCERAS ACTIVAS DE PIE TRATADAS CON CURACIÓN
                            </th>
                        <tr>
                            <th nowrap="">Curación Convencional</th>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_conv }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_conv_1564 }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_conv_65 }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_convM }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_convF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="">Curación Avanzada</th>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_avz }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_avz_1564 }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_avz_65 }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_avzM }}
                            </td>
                            <td>
                                {{ $ulcerasActivas_TipoCuracion_avzF }}
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON AMPUTACIÓN POR PIE DIABÉTICO</th>
                            <td>
                                {{ $aputacionPieDM2 }}
                            </td>
                            <td>
                                {{ $aputacionPieDM2_1564 }}
                            </td>
                            <td>
                                {{ $aputacionPieDM2_65 }}
                            </td>
                            <td>
                                {{ $aputacionPieDM2M }}
                            </td>
                            <td>
                                {{ $aputacionPieDM2F }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON DIAGNOSTICO ASOCIADO DE HIPERTENSION ARTERIAL</th>
                            <td>
                                {{ $dm2M_hta }}
                            </td>
                            <td>
                                {{ $dm2M_hta_1564 }}
                            </td>
                            <td>
                                {{ $dm2M_hta_65 }}
                            </td>
                            <td>
                                {{ $dm2M_htaM }}
                            </td>
                            <td>
                                {{ $dm2M_htaF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTE DE ATAQUE CEREBRO VASCULAR</th>
                            <td>
                                {{ $dm2M_acv }}
                            </td>
                            <td>
                                {{ $dm2M_acv_1564 }}
                            </td>
                            <td>
                                {{ $dm2M_acv_65 }}
                            </td>
                            <td>
                                {{ $dm2M_acvM }}
                            </td>
                            <td>
                                {{ $dm2M_acvF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO</th>
                            <td>
                                {{ $dm2M_iam }}
                            </td>
                            <td>
                                {{ $dm2M_iam_1564 }}
                            </td>
                            <td>
                                {{ $dm2M_iam_65 }}
                            </td>
                            <td>
                                {{ $dm2M_iamM }}
                            </td>
                            <td>
                                {{ $dm2M_iamF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="7" class="text-left bg-gradient-gray">PERSONAS HIPERTENSAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>
                                {{ $hta_racVigente }}
                            </td>
                            <td>
                                {{ $hta_racVigente_1564 }}
                            </td>
                            <td>
                                {{ $hta_racVigente_65 }}
                            </td>
                            <td>
                                {{ $hta_racVigenteM }}
                            </td>
                            <td>
                                {{ $hta_racVigenteF }}
                            </td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON PRESIÓN ARTERIAL igual o Mayor 160/100 mmHg</th>
                            <td>{{ $paMayor160 }}</td>
                            <td>{{ $paMayor160M }}</td>
                            <td>{{ $paMayor160F }}</td>
                            <td>{{$paMayor160_1519M}}</td>
                            <td>{{$paMayor160_1519F}}</td>
                            <td>{{$paMayor160_2024M}}</td>
                            <td>{{$paMayor160_2024F}}</td>
                            <td>{{$paMayor160_2529M}}</td>
                            <td>{{$paMayor160_2529F}}</td>
                            <td>{{$paMayor160_3034M}}</td>
                            <td>{{$paMayor160_3034F}}</td>
                            <td>{{$paMayor160_3539M}}</td>
                            <td>{{$paMayor160_3539F}}</td>
                            <td>{{$paMayor160_4044M}}</td>
                            <td>{{$paMayor160_4044F}}</td>
                            <td>{{$paMayor160_4549M}}</td>
                            <td>{{$paMayor160_4549F}}</td>
                            <td>{{$paMayor160_5054M}}</td>
                            <td>{{$paMayor160_5054F}}</td>
                            <td>{{$paMayor160_5559M}}</td>
                            <td>{{$paMayor160_5559F}}</td>
                            <td>{{$paMayor160_6064M}}</td>
                            <td>{{$paMayor160_6064F}}</td>
                            <td>{{$paMayor160_6569M}}</td>
                            <td>{{$paMayor160_6569F}}</td>
                            <td>{{$paMayor160_7074M}}</td>
                            <td>{{$paMayor160_7074F}}</td>
                            <td>{{$paMayor160_7579M}}</td>
                            <td>{{$paMayor160_7579F}}</td>
                            <td>{{$paMayor160_80M}}</td>
                            <td>{{$paMayor160_80F}}</td>
                        </tr>
                        <tr>
                            <th colspan="7" class="text-left bg-gradient-gray">TODAS LAS PERSONAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 25 y 29.9 <65< /th>
                            <td>{{ $imc2529_menor65 }}</td>
                            <td>{{ $imc2529_menor65 }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$imc2529_menor65M}}</td>
                            <td>{{$imc2529_menor65F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 28 y 31.9 >65</th>
                            <td>{{ $imc2831_mayor65 }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$imc2831_mayor65}}</td>
                            <td>{{$imc2831_mayor65M}}</td>
                            <td>{{$imc2831_mayor65F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OBESIDAD IMC igual o Mayor a 30KG/M2 <65< /th>
                            <td>{{ $imcMayor30_menor65 }}</td>
                            <td>{{ $imcMayor30_menor65 }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$imcMayor30_menor65M}}</td>
                            <td>{{$imcMayor30_menor65F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">**OBESIDAD: IMC igual o Mayor a 32KG/M2 >65</th>
                            <td>{{ $imcMayor32_mayor65 }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$imcMayor32_mayor65}}</td>
                            <td>{{$imcMayor32_mayor65M}}</td>
                            <td>{{$imcMayor32_mayor65F}}</td>
                        </tr>
                    </thead>
                </table>
                <p class="text-muted">NOTA (*): La vigencia de la evaluación del pie diabetico es de 12 meses.</p>
                <p class="text-muted">**Considerar en adultos mayores (65 años y más) un IMC igual o mayor a
                    32G/M2</p>
            </div>
        </div>
    </div>
</div>
@endsection
