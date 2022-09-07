<div class="form-group row">
    {!! Form::label('tipo_control', 'Profesional', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('tipo_control', ['Medico'=> 'Medico', 'Enfermera' => 'Enfermera', 'Kinesiologo' =>
        'Kinesiologo', 'Nutricionista' => 'Nutricionista'], old('tipo_control', $control->tipo_control), ['class' =>
        'form-control'.($errors->has('tipo_control') ? ' is-invalid' : ''), 'id' => 'tipo', 'placeholder'=> "Seleccione
        Profesional"]) !!}
        @if ($errors->has('tipo_control'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('tipo_control') }}</strong>
        </span>
        @endif
    </div>
</div>

{!! Form::hidden('paciente_id', $paciente->id) !!}

<div class="form-group row">
    {!! Form::label('fecha_control', 'Fecha Control', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::date('fecha_control', old('fecha_control', $control->fecha_control), ['class' => 'form-control
        form-control-sm'.($errors->has('fecha_control')
        ? ' is-invalid' : '')]) !!}
        @if ($errors->has('fecha_control'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('fecha_control') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('presion_arterial', 'Presion Arterial', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('presion_arterial', old('presion_arterial', $control->presion_arterial), ['class' =>
        'form-control
        form-control-sm'.($errors->has('presion_arterial') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo.: 120/80'])
        !!}
        @if ($errors->has('presion_arterial'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('presion_arterial') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('peso_actual', 'Peso actual(Kg.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('peso_actual', old('peso_actual', $control->peso_actual), ['class' => 'form-control
        form-control-sm'.($errors->has('peso_actual') ?
        ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 88', 'step' => 'any']) !!}
        @if ($errors->has('peso_actual'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('peso_actual') }}</strong>
        </span>
        @endif
    </div>
    {!! Form::label('talla_actual', 'Talla actual(Cms.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('talla_actual', old('talla_actual', $control->talla_actual), ['class' => 'form-control
        form-control-sm'.($errors->has('talla_actual')
        ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 175']) !!}
        @if ($errors->has('talla_actual'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('talla_actual') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('imc', 'IMC',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc', old('imc', $control->imc), ['class' => 'form-control form-control-sm','step' => 'any',
        'placeholder' => 'IMC'])
        !!}
    </div>
    {!! Form::label('imc_resultado', 'Estado Nutricional',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc_resultado', old('imc_resultado', $control->imc_resultado), ['class' => 'form-control
        form-control-sm'.($errors->has('imc_resultado')
        ? ' is-invalid' : ''), 'placeholder' => 'Est. Nutricional.']) !!}
        @if ($errors->has('imc_resultado'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('imc_resultado') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('observacion', 'Observación',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::textarea('observacion', old('observacion', $control->observacion), ['class' => 'form-control
        form-control-sm',
        'placeholder' => 'Ingrese observación']) !!}
    </div>
</div>

@foreach($paciente->patologias as $patologia)
@if($patologia->nombre_patologia == 'HTA')
@include('partials.hta')
@elseif($patologia->nombre_patologia == 'DLP')
@include('partials.dlp')
{{-- @elseif($patologia->nombre_patologia == 'ANTECEDENTE IAM' || $patologia->nombre_patologia == 'ANTECEDENTE ACV')
@include('partials.acv_iam') --}}
@elseif($patologia->nombre_patologia == 'SALA ERA')
@include('partials.sala_era')
@elseif($patologia->nombre_patologia == 'DM2')
@include('partials.dm2')
@endif
@endforeach

<div class="card card-info card-outline" id="proximo">
    <div class="card-header text-bold text-bold">Proximo Control</div>
    <div class="card-body row">
        {!! Form::label('proximo_control_label', 'Fecha prox. control',['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-2">
            {!! Form::date('proximo_control', old('proximo_control', $control->proximo_control), ['class' =>
            'form-control
            form-control-sm'.($errors->has('proximo_control') ? ' is-invalid' : '')]) !!}
            @if ($errors->has('proximo_control'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('proximo_control') }}</strong>
            </span>
            @endif
        </div>

        {!! Form::label('prox_tipo_atencion_label', 'Modalidad prox. Control',['class' => 'col-sm-2 col-form-label'])
        !!}
        <div class="col-sm-2">
            {!! Form::select('tipo_atencion', ['Telefonico'=> 'Telefonico', 'Visita domiciliaria' => 'Visita
            domiciliaria', 'Presencial' => 'Presencial', 'ELEAM' => 'ELEAM'], old('tipo_atencion',
            $control->tipo_atencion), ['class' => 'form-control form-control-sm'.($errors->has('prox_tipo')
            ? ' is-invalid' : ''), 'id' => 'atencion', 'placeholder'=> "Seleccione"]) !!}
            @if ($errors->has('tipo_atencion'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tipo_atencion') }}</strong>
            </span>
            @endif
        </div>

        {!! Form::label('prox_tipo_label', 'Prof. prox. Control',['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-2">
            {!! Form::select('prox_tipo', ['Medico'=> 'Medico', 'Enfermera' => 'Enfermera', 'Kinesiologo' =>
            'Kinesiologo',
            'Nutricionista' => 'Nutricionista'], old('prox_tipo', $control->prox_tipo), ['class' => 'form-control
            form-control-sm'.($errors->has('prox_tipo')
            ? ' is-invalid' : ''), 'id' => 'prox_tipo', 'placeholder'=> "Seleccione Profesional"]) !!}
            @if ($errors->has('prox_tipo'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('prox_tipo') }}</strong>
            </span>
            @endif
        </div>

        <div class="form-group row my-2 ml-2">
            {!! Form::label('examenes_label', 'Solicitud Examenes', ['class' => 'col-sm col-form-label text-bold']) !!}
            <div class="col-sm">
                {!! Form::label('examenes1_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
                {!! Form::checkbox('examen', "SI", old('examen', $control->examen == "SI"?true:null), ['class' =>
                'form-control my-2 examenes1']) !!}
            </div>
            <div class="col-sm">
                {!! Form::label('examenes2_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
                {!! Form::checkbox('examen', "NO", old('examen', $control->examen == "NO"?true:null), ['class' =>
                'form-control my-2 examenes1']) !!}
            </div>
            <div class="col-sm">
                {!! Form::label('examenes3_label', 'SI HBC', ['class' => 'col-sm col-form-label text-bold']) !!}
                {!! Form::checkbox('examen', "SI HBC", old('examen', $control->examen == "SI HBC"?true:null), ['class'
                => 'form-control my-2 examenes1']) !!}
            </div>
        </div>

    </div>
</div>

@section('js')
<script>
    $('#Enfermera, #Kine, #Medico, #Nutricionista').hide();
        $('#tipo, #prox_tipo, #atencion , .evaluacionPie, .ulcerasActivas, .asmaClasif, .asmaControl, .epocClasif, .epocControl, .otras_enf').select2({
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
                var edad = '{{ $paciente->edad() }}';

                if (edad >= 65) {
                    if (imc < 23) {
                        clasificacion = 'Bajo peso';
                    } else if (imc > 23 && imc < 28) {
                        clasificacion = 'Normal';
                    } else if (imc > 28 && imc < 32) {
                        clasificacion = 'Sobrepeso';
                    } else if (imc > 32 && imc < 37) {
                        clasificacion = 'Obesidad';
                    } else if (imc > 37) {
                        clasificacion = 'Obesidad Morbida';
                    }
                }
                if (edad < 65) {
                    if (imc < 18) {
                        clasificacion = 'Bajo peso';
                    } else if (imc > 18 && imc < 25) {
                        clasificacion = 'Normal';
                    } else if (imc > 25 && imc < 30) {
                        clasificacion = 'Sobrepeso';
                    } else if (imc > 30 && imc < 35) {
                        clasificacion = 'Obesidad';
                    } else if (imc > 35) {
                        clasificacion = 'Obesidad Morbida';
                    }
                }
                $('#imc_resultado').val(clasificacion);
            })
        });

        $("#rac_vigente, #examenes1").removeAttr("checked");

        $('#tipo').change(function () {
            $('#Enfermera, #Kine, #Medico, #Nutricionista').hide();
            var selection = $('#tipo').val();
            switch (selection) {
                case 'Enfermera':
                    $('#Enfermera').show();
                    $('#Kine').hide();
                    $('#Medico').hide();
                    break;
                case 'Kinesiologo':
                    $('#Kine').show();
                    $('#Enfermera').hide();
                    $('#Medico').hide();
                    break;
                case 'Medico':
                    $('#Medico, #Nutricionista').show();
                    $('#Enfermera').hide();
                    //$('#Kine').hide();
                    break;
            }
        });
        $('input.pa_14090').on('change', function () {
            $('input.pa_14090').not(this).prop('checked', false);
        });
        $('input.pa_160100').on('change', function () {
            $('input.pa_160100').not(this).prop('checked', false);
        });
        $('input.estatinas').on('change', function () {
            $('input.estatinas').not(this).prop('checked', false);
        });
        $('input.check').on('change', function () {
            $('input.check').not(this).prop('checked', false);
        });
        $('input.check1').on('change', function () {
            $('input.check1').not(this).prop('checked', false);
        });
        $('input.check2').on('change', function () {
            $('input.check2').not(this).prop('checked', false);
        });
        $('input.check6').on('change', function () {
            $('input.check6').not(this).prop('checked', false);
        });
        $('input.check7').on('change', function () {
            $('input.check7').not(this).prop('checked', false);
        });
        $('input.check10').on('change', function () {
            $('input.check10').not(this).prop('checked', false);
        });

        $('input.examenes1').on('change', function () {
            $('input.examenes1').not(this).prop('checked', false);
        });
        $('input.examenes2').on('change', function () {
            $('input.examenes2').not(this).prop('checked', false);
        });
        $('input.examenes3').on('change', function () {
            $('input.examenes3').not(this).prop('checked', false);
        });
</script>
<script>
    $('input.pa_14090').on('click', function () {
        if($('input.pa_14090').is(':checked')){
          $('.pa_160100').hide()

        } else $('.pa_160100').show()
});

    $('input.pa_160100').on('click', function () {
        if($('input.pa_160100').is(':checked')){
            $('.pa_14090').hide()

        } else $('.pa_14090').show()
});

    $('input.check').on('click', function () {
        if($('input.check').is(':checked')){

          $('.hba1c9').hide()

        } else $('.hba1c9').show()
});

    $('input.check1').on('click', function () {
        if($('input.check1').is(':checked')){
            $('.hba1c7').hide()

        } else $('.hba1c7').show()
});
</script>

@endsection
