<div class="form-group row">
    {!! Form::label('tipo_vivienda_label', 'Tipo Vivienda', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select(
            'tipo_vivienda',
            [
                'casa' => 'Casa',
                'departamento' => 'Departamento',
                'mejora_mediagua' => 'Mejora mediagua',
                'conventillo_cite' => 'Conventillo / Cite',
                'callampa' => 'Callampa',
                'rancho_ruca_choza' => 'Rancho/Ruca/Choza',
            ],
            old('tipo_vivienda', $vivienda->tipo_vivienda),
            [
                'class' => 'form-vivienda' . ($errors->has('tipo_vivienda') ? ' is-invalid' : ''),
                'id' => 'tipo_vivienda',
                'placeholder' => "Seleccione
                        vivienda",
            ],
        ) !!}
        @if ($errors->has('tipo_vivienda'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tipo_vivienda') }}</strong>
            </span>
        @endif
    </div>
</div>

{!! Form::hidden('familia_id', $familia->id) !!}

<div class="form-group row">
    {!! Form::label('tenencia_label', 'Tenencia casa', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'tenencia',
            [
                'propia' => 'Propia',
                'dividendo' => 'Dividendo',
                'arriendo' => 'Arriendo',
                'allegado' => 'Allegado',
                'cedida' => 'Cedida',
            ],
            old('tenencia', $vivienda->tenencia),
            [
                'class' =>
                    'form-control
                        form-control-sm' . ($errors->has('tenencia') ? ' is-invalid' : ''),
                'id' => 'tenencia',
                'placeholder' => 'Indique tenencia casa',
            ],
        ) !!}
        @if ($errors->has('tenencia'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tenencia') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('tenencia_sitio_label', 'Tenencia Sitio', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'tenencia_sitio',
            [
                'propia' => 'Propia',
                'dividendo' => 'Dividendo',
                'arriendo' => 'Arriendo',
                'allegado' => 'Allegado',
                'cedida' => 'Cedida',
            ],
            old('tenencia_sitio', $vivienda->tenencia_sitio),
            [
                'class' =>
                    'form-control
                        form-control-sm' . ($errors->has('tenencia_sitio') ? ' is-invalid' : ''),
                'id' => 'tenencia_sitio',
                'placeholder' => 'Indique tenencia Sitio',
            ],
        ) !!}
        @if ($errors->has('tenencia_sitio'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tenencia_sitio') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('tenencia_label', 'Tenencia casa', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'tenencia',
            [
                'propia' => 'Propia',
                'dividendo' => 'Dividendo',
                'arriendo' => 'Arriendo',
                'allegado' => 'Allegado',
                'cedida' => 'Cedida',
            ],
            old('tenencia', $vivienda->tenencia),
            [
                'class' =>
                    'form-control
                        form-control-sm' . ($errors->has('tenencia') ? ' is-invalid' : ''),
                'id' => 'tenencia',
                'placeholder' => 'Indique tenencia casa',
            ],
        ) !!}
        @if ($errors->has('tenencia'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tenencia') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('tenencia_sitio_label', 'Tenencia Sitio', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'tenencia_sitio',
            [
                'propia' => 'Propia',
                'dividendo' => 'Dividendo',
                'arriendo' => 'Arriendo',
                'allegado' => 'Allegado',
                'cedida' => 'Cedida',
            ],
            old('tenencia_sitio', $vivienda->tenencia_sitio),
            [
                'class' =>
                    'form-control
                        form-control-sm' . ($errors->has('tenencia_sitio') ? ' is-invalid' : ''),
                'id' => 'tenencia_sitio',
                'placeholder' => 'Indique tenencia Sitio',
            ],
        ) !!}
        @if ($errors->has('tenencia_sitio'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tenencia_sitio') }}</strong>
            </span>
        @endif
    </div>
</div>

@section('js')
    <script>
        $('#tipo_vivienda, #tenencia, #tenencia_sitio').select2({
            theme: 'classic',
            width: '100%'
        })
    </script>
@endsection
