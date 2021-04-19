<div class="card card-purple card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-purple">DISLIPIDEMIA</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('ldl_label', 'LDL', ['class' => 'col-sm col-form-label px-3']) !!}
        <div class="col-sm-9">
            {!! Form::select('ldl', ['A' => 'Menor a 70', 'B' => 'Entre 70 a 99', 'C' => 'Mayor Igual a 100'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>
</div>
