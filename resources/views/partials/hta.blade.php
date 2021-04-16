<div class="card card-danger card-outline mb-3">
    <div class="card-header text-bold text-red">HIPERTENSION ARTERIAL</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('rac_vigente_label', 'RAC(vigente)', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('rac_vigente', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
    @if($paciente->where('grupo', '>', 79))
       {{-- {{dd($paciente->where('grupo', '>', 79))}}--}}
        <div class="form-group row my-2 ml-2">
            {!! Form::label('pa_menor15090label', 'Presion arterial < 150/90', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
            <div class="col-sm-9">
                {!! Form::checkbox('pa_menor_150_90', 1, null, ['class' => 'form-control my-2']) !!}
            </div>
        </div>
    @else
        <div class="form-group row my-2 ml-2">
            {!! Form::label('pa_menor14090label', 'Presion arterial < 140/90', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
            <div class="col-sm-9">
                {!! Form::checkbox('pa_menor_140_90', 1, null, ['class' => 'form-control my-2']) !!}
            </div>
        </div>
    @endif
    <div class="form-group row my-2 ml-2">
        {!! Form::label('pa_mayor160100label', 'Presion arterial > 160/100', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('pa_mayor_160_100', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
</div>
