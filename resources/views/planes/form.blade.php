<div class="tab-pane fade active show" id="nav-plan" role="tabpanel" aria-labelledby="nav-plan-tab">
    <div class="form-group row py-3">
        {{ Form::label('nombre_label', 'Familia', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::text('nombre', $familia->familia, ['class' => 'form-control col-sm', 'readonly']) }}
        </div>
        {{ Form::label('fechaIngreso_label', 'Fecha INGRESO Plan Intervencion', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::date('fecha_ingreso', old('fecha_ingreso', $plan->fecha_ingreso ?? ''), ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : '')]) }}
            @if ($errors->has('fecha_ingreso'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('fecha_ingreso') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row py-3">
        {{ Form::label('eval_obs', 'Observaciones: ', ['class' => 'col-sm-3 col-form-label']) }}
        <div class="col col-sm-3 col-md-6 col-lg">
            {{ Form::textarea('observacion_plan', old('observacion_plan', $plan->observacion_plan ?? ''), ['class' => 'form-control']) }}
        </div>
    </div>
</div>

<div class="row py-3">
    <div class="col-sm">
        {{ Form::label('tipoPlan_label', 'Tipo Intervención: ', ['class' => 'col-form-label']) }}
    </div>
    <div class="col-sm">
        {!! Form::select(
            'tipo_plan',
            [
                'Integrante de la familia postrado' => 'Integrante de la familia postrado',
                'Integrante de la familia con cuidados paliativos' => 'Integrante de la familia con cuidados paliativos',
                'Estudio de Familia' => 'Estudio de Familia',
                'Otros' => 'Otros',
            ],
            old('tipo_plan') ?: $plan->tipo_plan,
            [
                'class' => 'form-control form-control-sm' . ($errors->has('tipo_plan') ? ' is-invalid' : ''),
                'placeholder' => 'Seleccione tipo de intervención',
                'id' => 'tipoPlan',
            ],
        ) !!}
        @if ($errors->has('tipo_plan'))
            <span class="invalid-feedback d-block">
                <strong>{{ $errors->first('tipo_plan') }}</strong>
            </span>
        @endif
    </div>
</div>
<hr>
<div class="form-group row">
    {!! Form::label('egresoPlan_label', 'EGRESO Plan', [
        'class' => 'col col-sm col-form-label',
    ]) !!}
    <div class="col col-sm">
        {!! Form::hidden('egreso_plan', 0) !!}
        {!! Form::checkbox('egreso_plan', 1, old('egreso_plan', $plan->egreso_plan ?? false), [
            'class' => 'form-control form-control-sm',
            'id' => 'egreso_plan_checkbox',
        ]) !!}
    </div>
    {{ Form::label('fechaEgreso_label', 'Fecha Egreso Plan', ['class' => 'col-sm-3 col-form-label']) }}
    <div class="col col-sm-3 col-md-6 col-lg">
        {{ Form::date('fecha_egreso', old('fecha_egreso', $plan->fecha_egreso ?? ''), ['class' => 'form-control' . ($errors->has('fecha_egreso') ? ' is-invalid' : '')]) }}
        @if ($errors->has('fecha_egreso'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('fecha_egreso') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('motivoEgreso_label', 'Motivo Egreso: ', ['class' => 'col-sm col-form-label']) !!}
    <div class="col col-sm col-md-6 col-lg">
        {!! Form::select(
            'motivo_egreso',
            [
                'Alta por cumplir plan de intervencion' => 'Alta por cumplir plan de intervencion',
                'Derivacion por complegidad del caso' => 'Derivacion por complegidad del caso',
                'Traslado de establecimiento' => 'Traslado de establecimiento',
                'Por abandono' => 'Por abandono',
            ],
            old('motivo_egreso') ?: $plan->motivo_egreso,
            [
                'class' => 'form-control form-control-sm',
                'placeholder' => 'Seleccione motivo de egreso',
                'id' => 'motivoEgreso',
            ],
        ) !!}
    </div>
</div>
