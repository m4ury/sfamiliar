<div class="form-group row">
    {!! Form::label('tipo_control', 'Profesional', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('tipo_control', ['Medico'=> 'Medico', 'Enfermera' => 'Enfermera', 'Kinesiologo' => 'Kinesiologo', 'Nutricionista' => 'Nutricionista'], null, ['class' => 'form-control form-control-sm', 'id' => 'tipo', 'placeholder'=> "Seleccione Profesional"]) !!}
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
        {!! Form::number('peso_actual', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 88']) !!}
    </div>
    {!! Form::label('talla_actual', 'Talla actual(Cms.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('talla_actual', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ejemplo: 175']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('imc', 'IMC',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc', null, ['class' => 'form-control form-control-sm','step' => 'any', 'placeholder' => 'IMC']) !!}
    </div>
    {!! Form::label('imc_resultado', 'Estado Nutricional',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc_resultado', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Est. Nutricional.']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('observacion', 'Observacion',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::textarea('observacion', null, ['class' => 'form-control form-control-sm','placeholder' => 'Ingrese observacion']) !!}
    </div>
</div>

@foreach($paciente->patologias as $patologia)
    @if($patologia->nombre_patologia == 'HTA')
        @include('partials.hta')
    @endif
    @if($patologia->nombre_patologia == 'DLP')
        @include('partials.dlp')
    @endif
    @if($patologia->nombre_patologia == 'ANTECEDENTE IAM' || $patologia->nombre_patologia == 'ANTECEDENTE ACV')
        @include('partials.acv_iam')
    @endif
    @if($patologia->nombre_patologia == 'SALA ERA')
        @include('partials.sala_era')
    @endif
    @if($patologia->nombre_patologia == 'DM2')
        @include('partials.dm2')
    @endif
@endforeach

<div class="form-group row">
    {!! Form::label('proximo_control', 'Fecha prox. control',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::date('proximo_control', null, ['class' => 'form-control form-control-sm']) !!}
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
            $('#imc_resultado').focus(function () {
                var clasificacion;
                if (imc < 18) {
                    clasificacion = 'Bajo peso';
                } else if (imc > 18 && imc < 25) {
                    clasificacion = 'Normal';
                } else if (imc > 25 && imc < 30) {
                    clasificacion = 'Sobrepeso';
                } else if (imc > 30 && imc < 35) {
                    clasificacion = 'Obeso';
                } else {
                    clasificacion = 'Obesidad Morbida';
                }
                $('#imc_resultado').val(clasificacion);
            })
        });
        $("#rac_vigente").removeAttr("checked");
    </script>
@endsection
