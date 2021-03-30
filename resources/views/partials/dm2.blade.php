<div class="card card-primary card-outline mb-3">
    <div class="card-header text-bold text-primary">DIABETES MELLITUS</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('hba1cMenor7_label', 'HBA1C MENOR A 7%', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('hba1cMenor7Porcent', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('hba1cMenor8_label', 'HBA1C MENOR A 8%', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('hba1cMenor8Porcent', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('hba1cMayor9_label', 'HBA1C MAYOR IGUAL A 9%', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('hba1cMayorIgual9Porcent', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('ldlMenor100_label', 'LDL MENOR A 100', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('ldlMenor100', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
</div>
