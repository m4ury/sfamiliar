<div class="card card-sky-blue card-outline mb-3">
    <div class="card-header text-bold text-red">ANTECEDENTE ENFERMEDAD CARDIOVASCULAR</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('aspirina_label', 'Uso Aspirinas', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('aspirina', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('estatina_label', 'Uso Estatina', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('estatina', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
</div>
