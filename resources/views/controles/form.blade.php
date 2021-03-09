<div class="form-group row">
    {!! Form::label('tipo_control', 'Tipo Control', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('tipo_control', ['Medico'=> 'Medico', 'Enfermera' => 'Enfermera', 'Kinesiologo' => 'Kinesiologo', 'Nutricionista' => 'Nutricionista'], null, ['class' => 'form-control form-control-sm', 'id' => 'tipo', 'placeholder'=> "Seleccione Tipo Control"]) !!}
    </div>
</div>

{!! Form::hidden('paciente_id', $paciente->id) !!}

<div class="form-group row">
    {!! Form::label('fecha_control', 'Fecha Control', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::date('fecha_control', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('presion_arterial', 'Presion Arterial', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('presion_arterial', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo.: 120/80']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('peso_actual', 'Peso actual(Kg.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('peso_actual', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Peso en Kg.']) !!}
    </div>
    {!! Form::label('talla_actual', 'Talla actual(Cms.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('talla_actual', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Talla en Cms.']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('imc', 'IMC',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('imc', null, ['class' => 'form-control form-control-sm','step' => 'any']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('observacion', 'Observacion',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::textarea('observacion', null, ['class' => 'form-control form-control-sm','placeholder' => 'Ingrese observacion']) !!}
    </div>
</div>
<hr>
<div class="form-group row">
    {!! Form::label('proximo_control', 'Fecha prox. control',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::date('proximo_control', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    {!! Form::label('hora_proximoControl', 'Hora',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::time('hora_proximoControl', null, ['class' => 'form-control form-control-sm', 'placeholder']) !!}
    </div>
</div>
@section('js')
    <script>
        $('#tipo').select2({
            theme: "classic",
            width: '100%',
        });
        $('#imc').focus(function () {
            var peso = $('#peso_actual').val();
            var talla = $('#talla_actual').val();
            var tallamts = talla / 100;
            var imc = peso / (tallamts * tallamts);
            var imcF = imc.toFixed(2);
            $('#imc').val(imcF);
        });
    </script>
@endsection
