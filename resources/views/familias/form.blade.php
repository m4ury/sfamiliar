{{ Form::open(['action' => 'FamiliaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
<div class="form-group row">
    {!! Form::label('familia_label', 'Apellidos Jefe Hogar', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('familia', null, ['class' => 'form-control form-control-sm'.($errors->has('familia') ? ' is-invalid' : ''), 'placeholder' =>
        'ej.: Sanchez']) !!}
        @if ($errors->has('familia'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('familia') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-sm-5">
        {!! Form::text('familia2',null, ['class' => 'form-control form-control-sm'.($errors->has('familia2') ? '
        is-invalid' : ''), 'placeholder' => 'ej.: Ramirez']) !!}
        @if ($errors->has('familia2'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('familia2') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('domicilio_label', 'Domicilio', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('domicilio',null, ['class' => 'form-control form-control-sm'.($errors->has('domicilio') ? ' is-invalid' : '')]) !!}
        @if ($errors->has('domicilio'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('domicilio') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-sm-5">
        {!! Form::select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' => 'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina' => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia', 'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun', 'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' => 'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule', 'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente' => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], null, ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('fono_label', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::tel('fono',null, ['class' => 'form-control form-control-sm'.($errors->has('fono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
            'ej.: 912345678']) !!}
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
            {!! Form::select('sector', ['SB' => 'Naranjo (SB)', 'SA' => 'Celeste (SA)'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
        @if ($errors->has('sector'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('sector') }}</strong>
            </span>
        @endif
        </div>
        <div class="col-sm-5">
            {!! Form::number('ficha_familiar',null, ['class' => 'form-control form-control-sm'.($errors->has('ficha_familiar') ? '
            is-invalid' : ''), 'placeholder' => 'Nº Ficha Familiar']) !!}
            @if ($errors->has('ficha_familiar'))
                <span class="invalid-feedback">
                   <strong>{{ $errors->first('ficha_familiar') }}</strong>
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
            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
        </a>
    </div>
</div>
{{ Form::close() }}

