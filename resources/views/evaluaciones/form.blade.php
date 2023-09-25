<div class="form-group row">
    {!! Form::label('tipo_evaluacion_label', 'Tipo evaluacion', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'tipo_evaluacion',
            [
                'casa' => 'Casa',
                'departamento' => 'Departamento',
                'mejora_mediagua' => 'Mejora mediagua',
                'conventillo_cite' => 'Conventillo / Cite',
                'callampa' => 'Callampa',
                'rancho_ruca_choza' => 'Rancho/Ruca/Choza',
            ],
            old('tipo_evaluacion', $evaluacion->tipo_evaluacion),
            [
                'class' => 'form-control' . ($errors->has('tipo_evaluacion') ? ' is-invalid' : ''),
                'id' => 'tipo_evaluacion',
                'placeholder' => 'Seleccione evaluacion',
            ],
        ) !!}
        @if ($errors->has('tipo_evaluacion'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tipo_evaluacion') }}</strong>
            </span>
        @endif
    </div>

    {!! Form::hidden('familia_id', $familia->id) !!}

    {!! Form::label('material_label', 'Material de const.', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'material',
            ['solida' => 'Solida', 'madera' => 'Madera', 'ladrillo' => 'Ladrillo', 'desecho' => 'Deshecho', 'mixto' => 'Mixto'],
            old('material', $evaluacion->material),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('material') ? ' is-invalid' : ''),
                'id' => 'material',
                'placeholder' => 'Indique material',
            ],
        ) !!}
        @if ($errors->has('material'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('material') }}</strong>
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
            old('tenencia', $evaluacion->tenencia),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('tenencia') ? ' is-invalid' : ''),
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
            old('tenencia_sitio', $evaluacion->tenencia_sitio ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('tenencia_sitio') ? ' is-invalid' : ''),
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
    {!! Form::label('calefaccion_label', 'Calefaccion principal', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'calefaccion',
            ['gas' => 'Gas', 'carbon' => 'Carbon', 'parafina' => 'Parafina', 'lena' => 'Leña', 'otro' => 'Otro'],
            old('calefaccion', $evaluacion->calefaccion ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('calefaccion') ? ' is-invalid' : ''),
                'id' => 'calefaccion',
                'placeholder' => 'Indique calefaccion',
            ],
        ) !!}
        @if ($errors->has('calefaccion'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('calefaccion') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('conservacion_label', 'Conservacion', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'conservacion',
            [
                'buen_estado' => 'Buen estado',
                'mal_estado' => 'Mal estado',
                'no_informado' => 'No Informado',
            ],
            old('conservacion', $evaluacion->conservacion ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('conservacion') ? ' is-invalid' : ''),
                'id' => 'conservacion',
                'placeholder' => 'Indique conservacion',
            ],
        ) !!}
        @if ($errors->has('conservacion'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('conservacion') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('num_piesas_label', 'Num. piezas', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('num_piezas', old('num_piezas', $evaluacion->num_piezas ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('num_piezas') ? ' is-invalid' : ''),
            'id' => 'piezas',
            'placeholder' => 'Cantidad de piezas',
        ]) !!}
        @if ($errors->has('num_piezas'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('num_piezas') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('num_dormitorios_label', 'Num. dormitorios', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('num_dormitorios', old('num_dormitorios', $evaluacion->num_dormitorios ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('num_dormitorios') ? ' is-invalid' : ''),
            'id' => 'dormitorios',
            'placeholder' => 'Cantidad de dormitorios',
        ]) !!}
        @if ($errors->has('num_dormitorios'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('num_dormitorios') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('num_camas_label', 'Num. camas', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('num_camas', old('num_camas', $evaluacion->num_camas ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('num_camas') ? ' is-invalid' : ''),
            'id' => 'piezas',
            'placeholder' => 'Cantidad de camas',
        ]) !!}
        @if ($errors->has('num_camas'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('num_camas') }}</strong>
            </span>
        @endif
    </div>
</div>
<hr>
<h6 class="text-bold">
    Cond. Sanitarias
</h6>
<div class="form-group row">
    {!! Form::label('agua_label', 'Agua', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'agua',
            [
                'potable' => 'Potable',
                'camion_algibe' => 'Camion Algibe',
                'noria' => 'Noria',
                'cedida' => 'Cedida',
            ],
            old('agua', $evaluacion->agua ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('agua') ? ' is-invalid' : ''),
                'id' => 'agua',
                'placeholder' => 'Indique obtencion de agua',
            ],
        ) !!}
        @if ($errors->has('agua'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('agua') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('cocina_label', 'Cocina', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'cocina',
            [
                'gas' => 'Gas',
                'lena' => 'Leña',
                'otro' => 'Otro',
            ],
            old('cocina', $evaluacion->cocina ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('cocina') ? ' is-invalid' : ''),
                'id' => 'cocina',
                'placeholder' => 'indique Cocina',
            ],
        ) !!}
        @if ($errors->has('cocina'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('cocina') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('excretas_label', 'Disp. Excretas', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'excretas',
            [
                'alcantarillado' => 'Alcantarillado',
                'fosa' => 'Fosa',
                'letrina' => 'Letrina',
                'poso' => 'Poso',
                'no_dispone' => 'NO dispone',
            ],
            old('excretas', $evaluacion->excretas ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('excretas') ? ' is-invalid' : ''),
                'id' => 'excretas',
                'placeholder' => 'Indique elimin. de excretas',
            ],
        ) !!}
        @if ($errors->has('excretas'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('excretas') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('luz_label', 'Luz', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'luz',
            [
                'electrica' => 'Electrica',
                'generador' => 'Generador',
                'cedida' => 'Cedida',
            ],
            old('excretas', $evaluacion->luz ?? ''),
            [
                'class' => 'form-control form-control-sm' . ($errors->has('luz') ? ' is-invalid' : ''),
                'id' => 'luz',
                'placeholder' => 'Indique luz',
            ],
        ) !!}
        @if ($errors->has('luz'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('luz') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('animales_label', 'Animales', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('animales', old('animales', $evaluacion->animales ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('animales') ? ' is-invalid' : ''),
            'id' => 'animales',
            'placeholder' => 'descrip. Animales',
        ]) !!}
        @if ($errors->has('animales'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('animales') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('basura_label', 'Elim. Basura', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('basura', old('basura', $evaluacion->basura ?? ''), [
            'class' => 'form-control form-control-sm' . ($errors->has('basura') ? ' is-invalid' : ''),
            'id' => 'basura',
            'placeholder' => 'Elimin. basura',
        ]) !!}
        @if ($errors->has('basura'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('basura') }}</strong>
            </span>
        @endif
    </div>
</div>


@section('js')
    <script>
        $('#tipo_evaluacion, #tenencia, #tenencia_sitio, #material, #conservacion, #calefaccion, #agua, #cocina, #excretas, #luz')
            .select2({
                theme: 'classic',
                width: '100%'
            })
    </script>
@endsection
