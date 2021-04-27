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
        0
    </td>
</tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
