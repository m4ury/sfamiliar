@extends('adminlte::page')

@section('title', 'Programacion')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                PROGRAMACION
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" rowspan="3">COMPENSACION</th>
                            <th class="text-center" colspan="4" rowspan="2">RIESGO CARDIOVASCULAR</th>
                            <th class="text-center" colspan="28">GRUPOS DE EDAD (en años)</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="3">15 a 19 años</th>
                            <th nowrap="" colspan="3">20 a 64 años</th>
                            <th nowrap="" colspan="3">65 y mas años</th>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                        </tr>
                        <tr>
                            <th nowrap="">COMPENSADO</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="">NO COMPENSADO</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        {{--<div class="col-md-12 table-responsive">
            <table id="pscv" class="table table-md-responsive table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" colspan="2" rowspan="3">ESTADO NUTRICIONAL</th>
                        <th class="text-center" colspan="3" rowspan="2"></th>
                        <th class="text-center" colspan="28">GRUPOS DE EDAD (en años) Y SEXO</th>
                        <th colspan="2" rowspan="2">Pueblos Originarios</th>
                        <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                    </tr>
                    <tr>
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

                    </tr>
                    <tr>
                        <th nowrap="" colspan="2">BAJO PESO</th>
                        <td>{{ bajoPeso }}</td>
                        <td>{{ bajoPesoM }}</td>
                        <td>{{ bajoPesoF }}</td>
                        <td>{{bajoPeso_6569M}}</td>
                        <td>{{bajoPeso_6569F}}</td>
                        <td>{{bajoPeso_7074M}}</td>
                        <td>{{bajoPeso_7074F}}</td>
                        <td>{{bajoPeso_7579M}}</td>
                        <td>{{bajoPeso_7579F}}</td>
                        <td>{{bajoPeso_80M}}</td>
                        <td>{{bajoPeso_80F}}</td>
                    </tr>

                    <tr>
                        <th nowrap="" colspan="2">NORMAL</th>
                        <td>{{ normal }}</td>
                        <td>{{ normalM }}</td>
                        <td>{{ normalF }}</td>
                        <td>{{normal_6569M}}</td>
                        <td>{{normal_6569F}}</td>
                        <td>{{normal_7074M}}</td>
                        <td>{{normal_7074F}}</td>
                        <td>{{normal_7579M}}</td>
                        <td>{{normal_7579F}}</td>
                        <td>{{normal_80M}}</td>
                        <td>{{normal_80F}}</td>
                    </tr>

                    <tr>
                        <th nowrap="" colspan="2">SOBREPESO</th>
                        <td>{{ sobrePeso }}</td>
                        <td>{{ sobrePesoM }}</td>
                        <td>{{ sobrePesoF }}</td>
                        <td>{{sobrePeso_6569M}}</td>
                        <td>{{sobrePeso_6569F}}</td>
                        <td>{{sobrePeso_7074M}}</td>
                        <td>{{sobrePeso_7074F}}</td>
                        <td>{{sobrePeso_7579M}}</td>
                        <td>{{sobrePeso_7579F}}</td>
                        <td>{{sobrePeso_80M}}</td>
                        <td>{{sobrePeso_80F}}</td>
                    </tr>
                    <tr>
                        <th nowrap="" colspan="2">OBESO</th>
                        <td>{{ obeso }}</td>
                        <td>{{ obesoM }}</td>
                        <td>{{ obesoF }}</td>
                        <td>{{obeso_6569M}}</td>
                        <td>{{obeso_6569F}}</td>
                        <td>{{obeso_7074M}}</td>
                        <td>{{obeso_7074F}}</td>
                        <td>{{obeso_7579M}}</td>
                        <td>{{obeso_7579F}}</td>
                        <td>{{obeso_80M}}</td>
                        <td>{{obeso_80F}}</td>
                    </tr>
                    <tr>
                        <th class="text-center" nowrap="" colspan="2"></th>
                        <td>{{ SeccionB }}</td>
                        <td>{{ SeccionBM }}</td>
                        <td>{{ SeccionBF }}</td>
                        <td>{{SeccionB_6569M}}</td>
                        <td>{{SeccionB_6569F}}</td>
                        <td>{{SeccionB_7074M}}</td>
                        <td>{{SeccionB_7074F}}</td>
                        <td>{{SeccionB_7579M}}</td>
                        <td>{{SeccionB_7579F}}</td>
                        <td>{{SeccionB_80M}}</td>
                        <td>{{SeccionB_80F}}</td>
                    </tr>
                </thead>
            </table>
        </div>--}}
    </div>
</div>
</div>
@endsection
