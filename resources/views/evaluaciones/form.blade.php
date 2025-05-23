<div class="tab-pane fade active show" id="nav-evaluacion" role="tabpanel" aria-labelledby="nav-evaluacion-tab">
    <div class="form-group row py-3">
        {{ Form::label('nombre_label', 'Familia', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::text('nombre', $familia->familia, ['class' => 'form-control col-sm', 'readonly']) }}
        </div>
        {{ Form::label('fecha_evaluacion', 'Fecha Evaluacion', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::date('fecha_evaluacion', old('fecha_evaluacion', $evaluacion->fecha_evaluacion ?? ''), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row py-3">
        {{ Form::label('eval_obs', 'Observaciones: ', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::textarea('observacion', old('observacion', $evaluacion->observacion ?? ''), ['class' => 'form-control']) }}
        </div>
    </div>
    {!! Form::hidden('familia_id', $familia->id) !!}
    {!! Form::hidden('evaluacion_id', $evaluacion->id) !!}
    {!! Form::hidden('factor_id', $factor->id) !!}
</div>

<div class="tab-pane fade" id="nav-bajo" role="tabpanel" aria-labelledby="nav-bajo-tab">
    <h3 class="text-bold text-center py-3">Factores que condicionan un Riesgo Bajo (1)</h3>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fBajo1_label', 'Patología crónica de cualquier miembro de la familia', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fBajo_1', 1, old('fBajo_1', $factor->fBajo_1 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fBajo2_label', 'Mala calidad de la viviena', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fBajo_2', 1, old('fBajo_2', $factor->fBajo_2 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fBajo3_label', 'Condiciones sanitarias inadecuadas', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fBajo_3', 1, old('fBajo_3', $factor->fBajo_3 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fBajo4_label', 'Contaminación ambiental y/o intradomiciliaria', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fBajo_4', 1, old('fBajo_4', $factor->fBajo_4 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-intermedio" role="tabpanel" aria-labelledby="nav-intermedio-tab">
    <h3 class="text-bold text-center py-3">Factores que condicionan un Riesgo Intermedio (2)</h3>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio1_label', 'Hacinamiento', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_1', 1, old('fIntermedio_1', $factor->fIntermedio_1 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio2_label', 'Analfabetismo de Padre o Madre', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_2', 1, old('fIntermedio_2', $factor->fIntermedio_2 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio3_label', 'Ausencia del Padre o Madre', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_3', 1, old('fIntermedio_3', $factor->fIntermedio_3 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio4_label', 'Duelo reciente', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_4', 1, old('fIntermedio_4', $factor->fIntermedio_4 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio5_label', 'Perdida del trabajo', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_5', 1, old('fIntermedio_5', $factor->fIntermedio_5 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio6_label', 'Crisis economica reciente', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_6', 1, old('fIntermedio_6', $factor->fIntermedio_6 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio7_label', 'Enfermedad grave Padre o Madre', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_7', 1, old('fIntermedio_7', $factor->fIntermedio_7 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio8_label', 'Embarazo no deseado', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_8', 1, old('fIntermedio_8', $factor->fIntermedio_8 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio9_label', 'Embarazo en adolescente', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_9', 1, old('fIntermedio_9', $factor->fIntermedio_9 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio10_label', 'Recien nacido mal formado o con daños geneticos', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_10', 1, old('fIntermedio_10', $factor->fIntermedio_10 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fIntermedio11_label', 'Alcoholismode otro miembro de la familia', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fIntermedio_11', 1, old('fIntermedio_11', $factor->fIntermedio_11 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-alto" role="tabpanel" aria-labelledby="nav-alto-tab">
    <h3 class="text-bold text-center py-3">Factores que condicionan un ALto Riesgo (3)</h3>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto1_label', 'Padre o Madre bebedor problema o excesivo', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_1', 1, old('fAlto_1', $factor->fAlto_1 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto2_label', 'Patologia psiquiatrica grave de algun integrante', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_2', 1, old('fAlto_2', $factor->fAlto_2 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto3_label', 'Enfermedad invalidante de Padre o Madre', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_3', 1, old('fAlto_3', $factor->fAlto_3 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto4_label', 'Extrema pobreza', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_4', 1, old('fAlto_4', $factor->fAlto_4 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto5_label', 'Cesantia prolongada', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_5', 1, old('fAlto_5', $factor->fAlto_5 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto6_label', 'Promiscuidad', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_6', 1, old('fAlto_6', $factor->fAlto_6 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto7_label', 'Baja integracion a grupos de la comunidad, deficiencia de redes de apoyo', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_7', 1, old('fAlto_7', $factor->fAlto_7 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto8_label', 'Ausencia de Padre o Madre', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_8', 1, old('fAlto_8', $factor->fAlto_8 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto9_label', 'Conflictos Cronicos de pareja', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_9', 1, old('fAlto_9', $factor->fAlto_9 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto10_label', 'Infidelidad', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_10', 1, old('fAlto_10', $factor->fAlto_10 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="form-group row pt-3">
        <div class="col-sm">
            {{ Form::label('fAlto11_label', 'Consumo de drogas', ['class' => 'col-form-label']) }}
        </div>
        <div class="col-sm">
            {{ Form::checkbox('fAlto_11', 1, old('fAlto_11', $factor->fIntermedio_11 ?? false), ['class' => 'form-control']) }}
        </div>
    </div>
</div>
