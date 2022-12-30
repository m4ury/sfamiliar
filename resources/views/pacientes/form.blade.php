
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <div class="form-group row mt-3">
        {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('rut', old('rut')?:$paciente->rut, ['class' => 'form-control form-control-sm'.($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' =>
            'Ej.: 16000000-K']) !!}
            @if ($errors->has('rut'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('rut') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-5">
            {!! Form::number('ficha',old('ficha')?:$paciente->ficha, ['class' => 'form-control form-control-sm'.($errors->has('ficha') ? '
            is-invalid' : ''), 'placeholder' => 'Nº Ficha']) !!}
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
            {!! Form::text('nombres', old('nombres')?:$paciente->nombres, ['class' => 'form-control form-control-sm'.($errors->has('nombres') ? ' is-invalid' : ''),
        'placeholder' => 'Ingrese Nombres']) !!}
            @if ($errors->has('nombres'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nombres') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('apellidos_label', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('apellidoP',old('apellidoP')?:$paciente->apellidoP, ['class' => 'form-control form-control-sm'.($errors->has('apellidoP') ? '
            is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
            @if ($errors->has('apellidoP'))
                <span class="invalid-feedback">
                            <strong>{{ $errors->first('apellidoP') }}</strong>
                            </span>
            @endif
        </div>
        <div class="col-sm-5">
            {!! Form::text('apellidoM',old('apellidoM')?:$paciente->apellidoM, ['class' => 'form-control form-control-sm'.($errors->has('apellidoM') ? '
            is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('fecha_nacimiento_label', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::date('fecha_nacimiento',old('fecha_nacimiento')?:$paciente->fecha_nacimiento, ['class' => 'form-control form-control-sm']) !!}
        </div>
        <div class="col-sm-5">
            {!! Form::select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], old('sexo')?:$paciente->sexo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sexo', 'id' => 'sexo']) !!}
        </div>
    </div>
    <hr>
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="form-group row mt-3">
        {!! Form::label('direccion_label', 'Direcciôn', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::text('direccion',old('direccion')?:$paciente->direccion, ['class' => 'form-control form-control-sm'.($errors->has('direccion') ? ' is-invalid' : '')]) !!}
            @if ($errors->has('direccion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('direccion') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-5">
            {!! Form::select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' => 'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina' => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia', 'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun', 'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' => 'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule', 'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente' => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], old('comuna')?:$paciente->comuna, ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna']) !!}
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('telefono_label', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::tel('telefono',old('telefono')?:$paciente->telefono, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
                'ej.: 912345678']) !!}
            @if ($errors->has('telefono'))
                <span class="invalid-feedback">
                <strong>{{ $errors->first('telefono') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-5">
            {!! Form::select('sector', ['Naranjo' => 'Naranjo', 'Celeste' => 'Celeste', 'Blanco' => 'Blanco'], old('sector')?:$paciente->sector, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
        </div>
    </div>
    <div class="form-group row">
        <div class="col">
            {!! Form::label('pueblo_originario_label', 'Originario', ['class' => 'col-sm col-form-label']) !!}
            {!! Form::checkbox('pueblo_originario', 1,  old('pueblo_originario')?:$paciente->pueblo_originario,['class' => 'form-control form-control']) !!}
        </div>
        <div class="col">
            {!! Form::label('migrante_label', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
            {!! Form::checkbox('migrante', 1, old('migrante')?:$paciente->migrante, ['class' => 'form-control form-control']) !!}
        </div>
    </div>
        @if(Route::is('pacientes.edit'))
        <hr>
            <div class="form-group row">
                <div class="col">
                    {!! Form::label('fellecido_label', 'Fallecido?', ['class' => 'col-sm col-form-label']) !!}
                    <div class="col-sm-6">
                        {!! Form::checkbox('fallecido', 1, old('fallecido', $paciente->fallecido) ,['class' => 'form-control form-control fallecido']) !!}
                    </div>
                    <div class="form-group row fecha_f">
                        {!! Form::label('fecha_fellecido_label', 'Fecha', ['class' => 'col-sm col-form-label']) !!}
                    <div class="col">
                        {!! Form::date('fecha_fallecido',$paciente->fecha_fallecido, ['class' => 'form-control form-control col-sm']) !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
