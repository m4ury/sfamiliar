<div class="tab-pane fade active show" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
    {{ Form::open(['action' => 'EvaluacionController@store', 'method' => 'POST', 'class' => 'form-horizontal pt-3']) }}
    <div class="form-group row">
            {{ Form::label('nombre', 'Familia', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::text('nombre', $familia->familia, ['class' => 'form-control col-sm', 'readonly']) }}
        </div>
            {{ Form::label('fecha_evaluacion', 'Fecha Evaluacion', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::date('fecha_evaluacion', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-bajo" role="tabpanel" aria-labelledby="nav-bajo-tab">
    <div class="form-group row">
        Factores de riesgo bajo
    </div>
</div>

<div class="tab-pane fade" id="nav-intermedio" role="tabpanel" aria-labelledby="nav-intermedio-tab">
    <div class="form-group row">
        Factores de riesgo intermedio
    </div>
</div>

<div class="tab-pane fade" id="nav-alto" role="tabpanel" aria-labelledby="nav-alto-tab">
    <div class="form-group row">
        Factores de riesgo alto
    </div>

        <div class="row">
            <div class="col">
                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
            </div>
            <div class="col">
                <a href="{{ url('familias') }}" style="text-decoration:none">
                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                </a>
            </div>
        </div>
</div>
    {{ Form::close() }}

@section('js')
    <script>
        $('#tipo_eval, #tenencia, #tenencia_sitio, #material, #conservacion, #calefaccion, #agua, #cocina, #excretas, #luz')
            .select2({
                theme: 'classic',
                width: '100%'
            })
    </script>
@endsection
