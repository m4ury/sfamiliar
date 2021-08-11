<div class="card card-primary card-outline mb-3" id="Enfermera">
    <div class="card-header text-bold text-bold">Examen de Medicina Prev. Adulto Mayor</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('funcionalidad_label', 'Funcionalidad', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('funcionalidad', ['SR' => 'Sin Riesgo', 'R' => 'Autovalente Con Riesgo', 'L'
            =>'Depend. Leve', 'M' => 'Depend. Moderada', 'S' => 'Depend. Severo', 'T' =>'Depend. Total'], old('unipodal', $paciente->funcionalidad), ['class' => 'form-control form-control-sm',
            'placeholder' => 'Seleccione funcionalidad', 'id' => 'funcionalidad']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('riesgoCaida_label', 'A.M. Con riesgo de caidas - Time Up and Go', ['class' =>
        'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('riesgoCaida', ['L' => 'Leve', 'N' =>
            'Normal', 'A' =>
            'Alto'], old('riesgoCaida', $paciente->riesgoCaida), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione riesgo', 'id' => 'riesgoCaida']) !!}
        </div>

        {!! Form::label('unipodal_label', 'A.M. Con riesgo de caidas - Unipodal', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('unipodal', ['N' => 'Normal', 'A' => 'Alterado'], old('unipodal', $paciente->unipodal), ['class' => 'form-control
            form-control', 'placeholder' => 'Seleccione riesgo', 'id' => 'unipodal']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('maltrato_label', 'Sospecha de Maltrato; SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('maltrato', old('maltrato', $paciente->maltrato), null, ['class' => 'form-control my-2 maltrato']) !!}
        </div>
        {!! Form::label('maltrato_label', 'Sospecha de Maltrato; NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('maltrato', 2, null, ['class' => 'form-control my-2 maltrato']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('actFisica_label', 'Actividad Fisica; SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('actFisica', 1, old('unipodal', $paciente->actFisica), ['class' => 'form-control my-2 actFisica']) !!}
        </div>
        {!! Form::label('actFisica_label', 'Actividad Fisica; NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('actFisica', 2, null, ['class' => 'form-control my-2 actFisica']) !!}
        </div>
    </div>
</div>
