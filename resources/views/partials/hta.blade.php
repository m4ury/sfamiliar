<div class="card card-danger card-outline mb-3">
    <div class="card-header text-bold text-red">HTA</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('rac_vigente_label', 'RAC(vigente)', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('rac_vigente', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('pa_menor14090label', 'P. Art. < 140/90', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('pa_menor14090', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('pa_mayor160100label', 'P. Art. > 160/100', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('pa_mayor160100', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
</div>
