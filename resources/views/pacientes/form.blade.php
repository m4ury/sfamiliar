{{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
<div class="form-group row">
    {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('rut', null, ['class' => 'form-control form-control-sm'.($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' =>
        'Ej.: 16000000-K']) !!}
        @if ($errors->has('rut'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('rut') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-10">
        {!! Form::text('nombres', null, ['class' => 'form-control form-control-sm'.($errors->has('nombres') ? ' is-invalid' : ''),
    'placeholder' => 'Ingrese Nombres']) !!}
        @if ($errors->has('nombres'))
            <span class="invalid-feedback">
                          <strong>{{ $errors->first('nombres') }}</strong>
                        </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('apellidoP',null, ['class' => 'form-control form-control-sm'.($errors->has('apellidoP') ? '
        is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
        @if ($errors->has('apellidoP'))
            <span class="invalid-feedback">
                          <strong>{{ $errors->first('apellidoP') }}</strong>
                        </span>
        @endif
    </div>
    <div class="col-sm-5">
        {!! Form::text('apellidoM',null, ['class' => 'form-control form-control-sm'.($errors->has('apellidoM') ? '
        is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
    </div>
</div>

<div class="form-group row">
    {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::date('fecha_nacimiento',null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="col-sm-5">
        {!! Form::select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sexo', 'id' => 'sexo']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('direccion', 'Direcciôn', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('direccion',null, ['class' => 'form-control form-control-sm']) !!}
    </div>
    <div class="col-sm-5">
        {!! Form::select('comuna', ['Cauquenes', 'Chanco', 'Pelluhue', 'Curico', 'Hualane', 'Licanten', 'Molina', 'Rauco', 'Romeral', 'Sgda Familia', 'Teno', 'Vichuquen', 'Linares', 'Colbun', 'Longabi', 'Parral', 'Retiro', 'San Javier', 'Villa Alegre', 'Yerbas Buenas', 'Talca', 'Constitucion', 'Empedrado', 'Maule', 'Pelarco', 'Pencahue', 'Rio Claro', 'San Clemente', 'San Rafael', 'Curepto'], null, ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('telefono', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::tel('telefono',null, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
            'ej.: 912345678']) !!}
        @if ($errors->has('telefono'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('telefono') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-sm-5">
        {!! Form::select('sector', ['Naranjo' => 'Naranjo', 'Celeste' => 'Celeste', 'Blanco' => 'Blanco'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
    </div>
</div>

<div class="form-group row">
    <div class="col">
        {!! Form::label('pueblo_originario', 'Originario', ['class' => 'col-sm col-form-label']) !!}
        {!! Form::checkbox('pueblo_originario', 1, ['class' => 'form-control form-control']) !!}
    </div>
    <div class="col">
        {!! Form::label('migrante', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
        {!! Form::checkbox('migrante', 1, ['class' => 'form-control form-control']) !!}
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
    </div>
    <div class="col">
        <a href="{{ url('pacientes') }}" style="text-decoration:none">
            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
        </a>
    </div>
</div>
{{ Form::close() }}

@section('js')
    <script>
        $('#comuna, #sexo, #sector').select2({
            theme: "classic",
            width: '100%'
        });
        $("#migrante, #pueblo_originario").removeAttr("checked");
        /*$('#input1, #input2').iCheck('check');*/
    </script>
@endsection
