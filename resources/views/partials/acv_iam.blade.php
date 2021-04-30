<div class="card card-info card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-info">ANTECEDENTE ENFERMEDAD CARDIOVASCULAR / INFARTO AL MIOCARDIO</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('aspirina_label', 'Uso Aspirinas SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('aspirinas', 1, null, ['class' => 'form-control my-2 aspirinas']) !!}
        </div>
        {!! Form::label('aspirina_label', 'Uso Aspirinas NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('aspirinas', 2, null, ['class' => 'form-control my-2 aspirinas']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('estatina_label', 'Uso Estatina SI', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('estatinas', 1, null, ['class' => 'form-control my-2 estatinas']) !!}
        </div>
        {!! Form::label('estatina_label', 'Uso Estatina NO', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('estatinas', 2, null, ['class' => 'form-control my-2 estatinas']) !!}
        </div>
    </div>
</div>
