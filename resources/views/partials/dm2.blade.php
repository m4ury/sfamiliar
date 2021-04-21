<div class="card card-primary card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-primary">DIABETES MELLITUS</div>
    @if($paciente->grupo > 79)
        <div class="form-group row my-2 ml-2">
            {!! Form::label('hba1cMenor8_label', 'HBA1C Menor a 8% SI', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('hba1cMenor8Porcent', 1, null, ['class' => 'form-control my-2 check']) !!}
            </div>
            {!! Form::label('hba1cMenor8_label', 'HBA1C Menor a 8% NO', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('hba1cMenor8Porcent', 2, null, ['class' => 'form-control my-2 check']) !!}
            </div>
        </div>
    @else
        <div class="form-group row my-2 ml-2">
            {!! Form::label('hba1cMenor7_label', 'HBA1C Menor a 7% SI', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('hba1cMenor7Porcent', 1, null, ['class' => 'form-control my-2 check']) !!}
            </div>
            {!! Form::label('hba1cMenor7_label', 'HBA1C Menor a 7% NO', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('hba1cMenor7Porcent', 2, null, ['class' => 'form-control my-2 check']) !!}
            </div>
        </div>
    @endif
    <div class="form-group row my-2 ml-2">
        {!! Form::label('hba1cMayor9_label', 'HBA1C Mayor o igual a 9% SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('hba1cMayorIgual9Porcent', 1, null, ['class' => 'form-control my-2 check1']) !!}
        </div>
        {!! Form::label('hba1cMayor9_label', 'HBA1C Mayor o igual a 9% NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('hba1cMayorIgual9Porcent', 2, null, ['class' => 'form-control my-2 check1']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('ldlMenor100_label', 'LDL Menor a 100 SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ldlMenor100', 1, null, ['class' => 'form-control my-2 check2']) !!}
        </div>
        {!! Form::label('ldlMenor100_label', 'LDL Menor a 100 NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ldlMenor100', 2, null, ['class' => 'form-control my-2 check2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('racVgente_label', 'RAC Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('racVignte', 1, null, ['class' => 'form-control my-2 check3']) !!}
        </div>
        {!! Form::label('racVgente_label', 'RAC NO Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('racVignte', 2, null, ['class' => 'form-control my-2 check3']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('vfgVigente_label', 'VFG Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('vfgVigente', 1, null, ['class' => 'form-control my-2 check4']) !!}
        </div>
        {!! Form::label('vfgVigente_label', 'VFG NO Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('vfgVigente', 2, null, ['class' => 'form-control my-2 check4']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('ecgVigente_label', 'ECG Vigente (1 año)', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ecgVigente', 1, null, ['class' => 'form-control my-2 check5']) !!}
        </div>
        {!! Form::label('ecgVigente_label', 'ECG NO Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ecgVigente', 2, null, ['class' => 'form-control my-2 check5']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('usoInsulina_label', 'Uso Insulina SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('usoInsulina', 1, null, ['class' => 'form-control my-2 check6']) !!}
        </div>
        {!! Form::label('usoInsulina_label', 'Uso Insulina NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('usoInsulina', 2, null, ['class' => 'form-control my-2 check6']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('usoIecaAraII_label', 'Uso IECA/ARA II SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('usoIecaAraII', 1, null, ['class' => 'form-control my-2 check7']) !!}
        </div>
        {!! Form::label('usoIecaAraII_label', 'Uso IECA/ARA II NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('usoIecaAraII', 2, null, ['class' => 'form-control my-2 check7']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('ldlVigente_label', 'LDL Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ldlVigente', 1, null, ['class' => 'form-control my-2 check8']) !!}
        </div>
        {!! Form::label('ldlVigente_label', 'LDL NO Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ldlVigente', 2, null, ['class' => 'form-control my-2 check8']) !!}
        </div>
    </div>
</div>
<div class="card card-primary card-outline mb-3" id="Enfermera">
    <div class="form-group row my-2 ml-2">
        {!! Form::label('fondoOjoVigente_label', 'Fondo de ojo Vigente (1 año)', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('fondoOjoVigente', 1, null, ['class' => 'form-control my-2 check9']) !!}
        </div>
        {!! Form::label('fondoOjoVigente_label', 'Fondo de ojo NO Vigente', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('fondoOjoVigente', 2, null, ['class' => 'form-control my-2 check9']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('amputacionPieDiabetico_label', 'Amputacion Pie diabetico', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('amputacionPieDiabetico', 1, null, ['class' => 'form-control my-2 check10']) !!}
        </div>
        {!! Form::label('amputacionPieDiabetico_label', 'NO Amputacion Pie diabetico', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('amputacionPieDiabetico', 2, null, ['class' => 'form-control my-2 check10']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('controlPodologico_alDia_label', 'Control Podologico al dia', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('controlPodologico_alDia', 1, null, ['class' => 'form-control my-2 check11']) !!}
        </div>
        {!! Form::label('controlPodologico_alDia_label', 'Control Podologico NO al dia', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('controlPodologico_alDia', 2, null, ['class' => 'form-control my-2 check11']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('evaluacionPie_label', 'Evaluacion Pie diabetico', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('evaluacionPie', ['Bajo' => 'Riesgo Bajo', 'Moderado' => 'Riesgo Moderado', 'Alto' =>'Riesgo Alto', 'Maximo' => 'Riesgo Maximo'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione riesgo']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('ulcerasActivas_TipoCuracion_label', 'Ulceras Activas segun tipo curación', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('ulcerasActivas_TipoCuracion', ['Avanzada' => 'Avanzada', 'Convencional' => 'Convencional'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione tipo curación']) !!}
        </div>
    </div>
</div>

