@extends('adminlte::page')

@section('title', 'Seccion C')

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
                            <th class="text-center" colspan="2" rowspan="2">VARIABLES</th>
                            <th class="text-center" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="2">EDAD (en años)</th>
                            <th colspan="2">SEXO</th>
                        </tr>
                        <tr>
                            <th nowrap="">15 a 64 años</th>
                            <th nowrap="">65 Y mas</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>
                        <tr>
                            <th class="text-left" colspan="7">PERSONAS DIABETICAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>
                                {{ $racVigente }}
                            </td>
                            <td>
                                {{ $racVigente_1564 }}
                            </td>
                            <td>
                                {{ $racVigente_65 }}
                            </td>
                            <td>
                                {{ $racVigenteM }}
                            </td>
                            <td>
                                {{ $racVigenteF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG), VIGENTE</th>
                            <td>
                                {{ $vfgVigente }}
                            </td>
                            <td>
                                {{ $vfgVigente_1564 }}
                            </td>
                            <td>
                                {{ $vfgVigente_65 }}
                            </td>
                            <td>
                                {{ $vfgVigenteM }}
                            </td>
                            <td>
                                {{ $vfgVigenteF }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2">CON FONDO DE OJO, VIGENTE</th>
                            <td>
                                {{ $fondoOjoVigente }}
                            </td>
                            <td>
                                {{ $fondoOjoVigente_1564 }}
                            </td>
                            <td>
                                {{ $fondoOjoVigente_65 }}
                            </td>
                            <td>
                                {{ $fondoOjoVigenteM }}
                            </td>
                            <td>
                                {{ $fondoOjoVigenteF }}
                            </td>
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
                            <th colspan="2">EN  TRATAMIENTO CON INSULINA QUE LOGRA META CON  HbA1C SEGÚN EDAD</th>
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
                                CON *EVALUACIÓN VIGENTE DEL PIE SEGÚN PAUTA DE ESTIMACION DEL RIESGO DE ULCERACION EN PERSONAS CON DIABETES
                            </th>
                            <tr>
                                <th nowrap="">Riesgo Bajo</th>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo Moderado</th>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo Alto</th>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo Maximo</th>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                                <td>99</td>
                            </tr>
                        </tr>
                        <tr>
                            <th rowspan="3" style="vertical-align: middle">
                                CON ÚLCERAS ACTIVAS DE PIE TRATADAS CON CURACIÓN
                            </th>
                            <tr>
                                <th nowrap="">Curación Convencional</th>
                                <td>89</td>
                                <td>89</td>
                                <td>89</td>
                                <td>89</td>
                                <td>89</td>
                            </tr>
                            <tr>
                                <th nowrap="">Curación Avanzada</th>
                                <td>79</td>
                                <td>79</td>
                                <td>79</td>
                                <td>79</td>
                                <td>79</td>
                            </tr>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON AMPUTACIÓN POR PIE DIABÉTICO</th>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON DIAGNOSTICO ASOCIADO DE HIPERTENSION ARTERIAL</th>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTE DE ATAQUE CEREBRO VASCULAR</th>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO</th>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <th colspan="7" class="text-left">PERSONAS HIPERTENSAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON PRESIÓN ARTERIAL igual o Mayor 160/100 mmHg</th>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <th colspan="7" class="text-left">TODAS LAS PERSONAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 25 y 29.9 <65</th>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 28 y 31.9 >65</th>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OBESIDAD IMC igual o Mayor a 30KG/M2 <65</th>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                            <td>33</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">**OBESIDAD: IMC igual o Mayor a 32KG/M2 >65</th>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                            <td>22</td>
                        </tr>
                        </thead>
                    </table>
                    <p class="text-muted">NOTA (*): La vigencia de la evaluación del pie diabetico es de 12 meses.</p>
                    <p class="text-muted">**Considerar en adultos mayores (65 años y más) un IMC igual o mayor a 32G/M2</p>
                </div>
            </div>
        </div>
    </div>
@endsection
