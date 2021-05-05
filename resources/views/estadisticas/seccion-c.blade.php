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
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
