<div class="card card-success card-outline mb-3">
    <div class="card-header text-bold text-success">SALA ERA</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('asmaClasif_label', 'ASMA CLASIF.', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('asmaClasif', ['L' => 'Leve', 'M' => 'Moderado', 'S' => 'Severo'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('asmaControl_label', 'ASMA NIVEL DE CONTROL', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('asmaControl', ['Controlado', 'Parcialmente Controlado', 'No Controlado', 'No Evaluado'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('epocClasif_label', 'EPOC CLASIF.', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('epocClasif', ['A', 'B'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('epocControl_label', 'EPOC NIVEL DE CONTROL', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('epocControl', ['Logra Control', 'No Logra Control', 'No Evaluado'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('espirometrialabel', 'ESPIROMETRIA VIGENTE (menor a 1 año)', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-9">
            {!! Form::checkbox('espirometriaVigente', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>
</div>
