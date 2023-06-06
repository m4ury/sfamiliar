{{ Form::open(['action' => 'FamiliaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
<div class="form-group row">
    {!! Form::label('familia_label', 'Apellidos Jefe Hogar', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('familia', old('familia', $familia->familia ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('familia') ? ' is-invalid' : ''),
            'placeholder' => 'ej.: Sanchez Morales',
        ]) !!}
        @if ($errors->has('familia'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('familia') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('domicilio_label', 'Domicilio', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('domicilio', old('domicilio', $familia->domicilio ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('domicilio') ? ' is-invalid' : ''),
            'placeholder' => 'indique Calle y Numero',
        ]) !!}
        @if ($errors->has('domicilio'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('domicilio') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('comuna_label', 'Comuna: ', ['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'comuna',
            [
                'Cauquenes' => 'Cauquenes',
                'Chanco' => 'Chanco',
                'Pelluhue' => 'Pelluhue',
                'Curico' => 'Curico',
                'Hualane' => 'Hualane',
                'Licanten' => 'Licanten',
                'Molina' => 'Molina',
                'Rauco' => 'Rauco',
                'Romeral' => 'Romeral',
                'Sgda Familia' => 'Sgda Familia',
                'Teno' => 'Teno',
                'Vichuquen' => 'Vichuquen',
                'Linares' => 'Linares',
                'Colbun' => 'Colbun',
                'Longabi' => 'Longabi',
                'Parral' => 'Parral',
                'Retiro' => 'Retiro',
                'San Javier' => 'San Javier',
                'Villa Alegre' => 'Villa Alegre',
                'Yerbas Buenas' => 'Yerbas Buenas',
                'Talca' => 'Talca',
                'Constitucion' => 'Constitucion',
                'Empedrado' => 'Empedrado',
                'Maule' => 'Maule',
                'Pelarco' => 'Pelarco',
                'Pencahue' => 'Pencahue',
                'Rio Claro' => 'Rio Claro',
                'San Clemente' => 'San Clemente',
                'San Rafael' => 'San Rafael',
                'Curepto' => 'Curepto',
            ],
            old('comuna', $familia->comuna ?? ''),
            ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna'],
        ) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('fono_label', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::tel('fono', old('fono', $familia->fono ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('fono') ? ' is-invalid' : ''),
            'id' => 'phone',
            'placeholder' => 'ej.: 912345678',
        ]) !!}
        @if ($errors->has('fono'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('fono') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('sector_label', 'Sector', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::select(
            'sector',
            ['SB' => 'Naranjo (SB)', 'SA' => 'Celeste (SA)'],
            old('sector', $familia->sector ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('sector') ? 'is-invalid' : ''),
                'placeholder' => 'Seleccione Sector',
                'id' => 'sector',
            ],
        ) !!}
        @if ($errors->has('sector'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('sector') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('ficha_label', 'Num. Ficha familiar: ', ['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('ficha_familiar', old('ficha_familiar', $familia->ficha_familiar ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('ficha_familiar') ? 'is-invalid' : ''),
            'placeholder' => 'Nº Ficha Familiar',
        ]) !!}
        @if ($errors->has('ficha_familiar'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('ficha_familiar') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('tipo_familia_label', 'Tipo Familia', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::select(
            'tipo_familia',
            [
                'nuclear' => 'Nuclear',
                'extensa' => 'Extensa',
                'monoparental' => 'Monoparental',
                'unipersonal' => 'Unipersonal',
                'reconstituida' => 'Reconstituida',
            ],
            old('tipo_familia', $familia->tipo_familia ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('tipo_familia') ? 'is-invalid' : ''),
                'placeholder' => 'Seleccione Tipo familia',
                'id' => 'tipo_familia',
            ],
        ) !!}
        @if ($errors->has('tipo_familia'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tipo_familia') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('etapa_cicloVital_label', 'Etapa ciclo vital: ', ['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'etapa_cicloVital',
            [
                'formacion_pareja' => 'Formacion  de pareja',
                'crianza_inicial' => 'Crianza inicial',
                'hijos_preescolares' => 'Hijos preescolares',
                'hijos_escolares' => 'Hijos escolares',
                'hijos_adolecentes' => 'Hijos adolecentes',
                'plataforma_lanzam' => 'Plataforma lanzamiento',
                'nido_vacio' => 'Nido vacio',
                'adulto_mayor' => 'Adulto mayor',
            ],
            old('etapa_cicloVital', $familia->etapa_cicloVital ?? ''),
            ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Etapa', 'id' => 'etapa_cicloVital'],
        ) !!}
        @if ($errors->has('etapa_cicloVital'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('etapa_cicloVital') }}</strong>
            </span>
        @endif
    </div>
</div>
<hr>

<div class="row">
    <div class="col">
        {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
    </div>
    <div class="col">
        <a href="{{ url('familias') }}" style="text-decoration:none">
            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
        </a>
    </div>
</div>
{{ Form::close() }}
