<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    {{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
    <div class="form-group row mt-3">
        {!! Form::label('rut_label', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('rut', old('rut') ?: $paciente->rut, [
                'class' => 'form-control form-control-sm' . ($errors->has('rut') ? ' is-invalid' : ''),
                'placeholder' => 'Ej.: 16000000-K',
            ]) !!}
            @if ($errors->has('rut'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('rut') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('ficha_label', 'Num. Ficha: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::number('ficha', old('ficha') ?: $paciente->ficha, [
                'class' => 'form-control form-control-sm' . ($errors->has('ficha') ? 'is-invalid' : ''),
                'placeholder' => 'Nº ultima ficha creada ' . Str::replace(['{', '}', '"ficha"'], '', $paciente->ultFicha()->last()),
            ]) !!}
            @if ($errors->has('ficha'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('ficha') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('nombres', old('nombres') ?: $paciente->nombres, [
                'class' => 'form-control form-control-sm' . ($errors->has('nombres') ? ' is-invalid' : ''),
                'placeholder' => 'Ingrese Nombres',
            ]) !!}
            @if ($errors->has('nombres'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nombres') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('apellidos_label', 'Apellido paterno', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('apellidoP', old('apellidoP') ?: $paciente->apellidoP, [
                'class' => 'form-control form-control-sm' . ($errors->has('apellidoP') ? 'is-invalid' : ''),
                'placeholder' => 'Apellido Paterno',
            ]) !!}
            @if ($errors->has('apellidoP'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('apellidoP') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('apellidoM_label', 'Apellido materno: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('apellidoM', old('apellidoM') ?: $paciente->apellidoM, [
                'class' => 'form-control form-control-sm' . ($errors->has('apellidoM') ? 'is-invalid' : ''),
                'placeholder' => 'Apellido Materno',
            ]) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('fecha_nacimiento_label', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::date('fecha_nacimiento', old('fecha_nacimiento') ?: $paciente->fecha_nacimiento, [
                'class' => 'form-control form-control-sm',
            ]) !!}
        </div>
        {!! Form::label('comuna_label', 'Sexo: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'sexo',
                ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'],
                old('sexo') ?: $paciente->sexo,
                ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sexo', 'id' => 'sexo'],
            ) !!}
        </div>
    </div>
    <div class="form-group row mt-3">
        {!! Form::label('direccion_label', 'Dirección', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('direccion', old('direccion') ?: $paciente->direccion, [
                'class' => 'form-control form-control-sm' . ($errors->has('direccion') ? ' is-invalid' : ''),
                'placeholder' => 'Ingrese direccion',
            ]) !!}
            @if ($errors->has('direccion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('direccion') }}</strong>
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
                old('comuna') ?: $paciente->comuna,
                ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna'],
            ) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('telefono_label', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::tel('telefono', old('telefono') ?: $paciente->telefono, [
                'class' => 'form-control form-control-sm' . ($errors->has('telefono') ? ' is-invalid' : ''),
                'id' => 'phone',
                'placeholder' => 'ej.: 912345678',
            ]) !!}
            @if ($errors->has('telefono'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('telefono') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('sector_label', 'Sector: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'sector',
                ['naranjo' => 'Naranjo', 'celeste' => 'Celeste', 'blanco' => 'Blanco'],
                old('sector') ?: $paciente->sector,
                ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector'],
            ) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('e_civil_label', 'Estado Civil: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::select(
                'e_civil',
                [
                    'Soltera (o)' => 'Soltera (o)',
                    'Casada (o)' => 'Casada (o)',
                    'Divorciada (o)' => 'Divorciada (o)',
                    'Viuda (o)' => 'Viuda (o)',
                ],
                old('e_civil') ?: $paciente->e_civil,
                [
                    'class' => 'form-control form-control-sm' . ($errors->has('e_civil') ? ' is-invalid' : ''),
                    'id' => 'e_civil',
                    'placeholder' => 'Seleccione Estado civil',
                ],
            ) !!}
            @if ($errors->has('e_civil'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('e_civil') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('escolaridad_label', 'Escolaridad: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'escolaridad',
                [
                    'Basica Completa' => 'Basica Completa',
                    'Basica Incompleta' => 'Basica Incompleta',
                    'Media Completa' => 'Media Completa',
                    'Media Incompleta' => 'Media Incompleta',
                    'Superior Completa' => 'Superior Completa',
                    'Superior Incompleta' => 'Superior Incompleta',
                    'Pre-Escolar' => 'Pre-Escolar',
                    'sin Pre-Escolar' => 'sin Pre-Escolar',
                    'Tec-Superior Completa' => 'Tec-Superior Completa',
                    'Tec-Superior Incompleta' => 'Tec-Superior Incompleta',
                    'Universitaria' => 'Universitaria',
                    'no informado' => 'no informado',
                    'Sin Escolaridad' => 'Sin Escolaridad',
                    'Especial Completa' => 'Especial Completa',
                    'Especial Incompleta' => 'Especial Incompleta',
                    'Instituto Profesional' => 'Instituto Profesional',
                    'Academias' => 'Academias',
                    'no asiste' => 'no asiste',
                ],
                old('escolaridad') ?: $paciente->escolaridad,
                ['class' => 'form-control form-control col-sm', 'id' => 'escolaridad', 'placeholder' => 'Seleccione Escolaridad'],
            ) !!}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="form-group row  mt-3">
        {!! Form::label('parentesco_label', 'Parentesco', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::select(
                'parentesco',
                [
                    'Esposa (o)' => 'Esposa (o)',
                    'Pareja' => 'Pareja',
                    'Papá' => 'Papá',
                    'Mamá' => 'Mamá',
                    'Hermana (o)' => 'Hermana (o)',
                    'Hija (o)' => 'Hija (o)',
                    'Abuela (o)' => 'Abuela (o)',
                    'Tia (o)' => 'Tia (o)',
                    'Prima (o)' => 'Prima (o)',
                    'Suegra (o)' => 'Suegra (o)',
                    'Cuñada (o)' => 'Cuñada (o)',
                    'Sobrina (o)' => 'Sobrina (o)',
                    'Nieta (o)' => 'Nieta (o)',
                    'Bisnieta (o)' => 'Bisnieta (o)',
                    'Hijastra (o)' => 'Hijastra (o)',
                    'Conyuge' => 'Conyuge',
                    'Conviviente' => 'Conviviente',
                    'Otros' => 'Otros',
                    'padrastro_madrastra' => 'Padrastro / Madrastra',
                    'nuera_yerno' => 'Nuera / Yerno',
                    'jefe_hogar' => 'Jefe Hogar',
                ],
                old('parentesco') ?: $paciente->parentesco,
                [
                    'class' => 'form-control form-control-sm' . ($errors->has('parentesco') ? ' is-invalid' : ''),
                    'id' => 'parentesco',
                    'placeholder' => 'Seleccione parentesco',
                ],
            ) !!}
            @if ($errors->has('parentesco'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('parentesco') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('profesion_label', 'Profesion', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('profesion', old('profesion') ?: $paciente->profesion, [
                'class' => 'form-control form-control-sm' . ($errors->has('profesion') ? ' is-invalid' : ''),
                'placeholder' => 'Ingrese profesion',
            ]) !!}
            @if ($errors->has('profesion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('profesion') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('ingreso_label', 'Ingreso.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::number('ingreso', old('ingreso') ?: $paciente->ingreso, [
                'class' => 'form-control form-control-sm' . ($errors->has('ingreso') ? ' is-invalid' : ''),
                'id' => 'phone',
                'placeholder' => 'ingreso en pesos',
            ]) !!}
            @if ($errors->has('ingreso'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('ingreso') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('prevision_label', 'Prevision', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'prevision',
                [
                    'Fonasa' => 'Fonasa',
                    'Isapre' => 'Isapre',
                    'Dipreca' => 'Dipreca',
                    'PRAIS' => 'PRAIS',
                    'PRAIS-ISAPRE' => 'PRAIS-ISAPRE',
                    'Sin prevision' => 'Sin prevision',
                ],
                old('prevision') ?: $paciente->prevision,
                ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione prevision', 'id' => 'prevision'],
            ) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col">
            {!! Form::label('pueblo_originario_label', 'Originario', ['class' => 'col-sm col-form-label']) !!}
            {!! Form::checkbox('pueblo_originario', 1, old('pueblo_originario') ?: $paciente->pueblo_originario, [
                'class' => 'form-control form-control',
            ]) !!}
        </div>
        <div class="col">
            {!! Form::label('migrante_label', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
            {!! Form::checkbox('migrante', 1, old('migrante') ?: $paciente->migrante, [
                'class' => 'form-control form-control',
            ]) !!}
        </div>
    </div>
    @if (Route::is('pacientes.edit'))
        <hr>
        <div class="form-group row">
            <div class="col">
                {!! Form::label('fellecido_label', 'Fallecido?', ['class' => 'col-sm col-form-label']) !!}
                <div class="col-sm-6">
                    {!! Form::checkbox('fallecido', 1, old('fallecido', $paciente->fallecido), [
                        'class' => 'form-control form-control fallecido',
                    ]) !!}
                </div>
                <div class="form-group row fecha_f">
                    {!! Form::label('fecha_fellecido_label', 'Fecha', ['class' => 'col-sm col-form-label']) !!}
                    <div class="col">
                        {!! Form::date('fecha_fallecido', $paciente->fecha_fallecido, [
                            'class' => 'form-control form-control-sm' . ($errors->has('fecha_fallecido') ? ' is-invalid' : ''),
                        ]) !!}
                    </div>
                </div>
                @if ($errors->has('fecha_fallecido'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('fecha_fallecido') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('planIntervencion_label', 'Familia con Plan de Intervención', [
                'class' => 'col col-sm-4 col-form-label',
            ]) !!}
            <div class="col col-sm-3">
                {!! Form::hidden('plan_intervencion', 0) !!}
                {!! Form::checkbox('plan_intervencion', 1, old('plan_intervencion', $familia->plan_intervencion ?? false), [
                    'class' => 'form-control form-control-sm',
                    'id' => 'plan_intervencion_checkbox',
                ]) !!}
            </div>
            <div class="form-group col col-sm plan_intervencion_fecha">
                <div class="row align-items-center">
                    <div class="col-auto">
                        {!! Form::label('fecha_plan_intervencion_label', 'Fecha Plan: ', ['class' => 'col-form-label mb-0']) !!}
                    </div>
                    <div class="col">
                        {!! Form::date('plan_intervencion_fecha', $familia->plan_intervencion_fecha, [
                            'class' => 'form-control form-control-sm',
                        ]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
            </div>
            <div class="col">
                <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                </a>
            </div>
        </div>
        {{ Form::close() }}
    @else
        <div class="row">
            <div class="col">
                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
            </div>
            <div class="col">
                <a href="{{ url('pacientes') }}" style="text-decoration:none">
                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                </a>
            </div>
        </div>
</div>
{{ Form::close() }}
@endif
