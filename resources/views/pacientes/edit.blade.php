@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sx-12 col-sm-12 col-lg-8">
            <div class="card card card-success card-outline">
                <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
                <div class="card-body">
                    {{ Form::open(['action' => 'PacienteController@update', 'method' => 'POST', 'url' => 'pacientes/'.$paciente->id, 'class' => 'form-horizontal']) }}
                    @method('PUT')
                    <div class="form-group row">
                        {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('rut', old('rut')?:$paciente->rut, ['class' => 'form-control
                            form-control-sm'.($errors->has('rut')
                            ? ' is-invalid' :
                            old('rut')), 'placeholder' =>
                            'Ej.:16000000-K']) !!}
                            @if ($errors->has('rut'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('rut') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::number('ficha',$paciente->ficha, ['class' => 'form-control
                            form-control-sm'.($errors->has('ficha')
                            ? ' is-invalid' : old('ficha')), 'placeholder' => 'Nº Ficha']) !!}
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
                            {!! Form::text('nombres', $paciente->nombres, ['class' => 'form-control
                            form-control-sm'.($errors->has('nombres') ? '
                            is-invalid' : old('nombres')),
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
                            {!! Form::text('apellidoP',$paciente->apellidoP, ['class' => 'form-control
                            form-control-sm'.($errors->has('apellidoP') ? 'is-invalid' : ''), 'placeholder' => 'Apellido
                            Paterno']) !!}
                            @if ($errors->has('apellidoP'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoP') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::text('apellidoM',$paciente->apellidoM, ['class' => 'form-control
                            form-control-sm'.($errors->has('apellidoM') ? '
                            is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
                            @if ($errors->has('apellidoM'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoM') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::date('fecha_nacimiento',$paciente->fecha_nacimiento, ['class' => 'form-control
                            form-control-sm']) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::tel('telefono',$paciente->telefono, ['class' => 'form-control
                            form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone',
                            'placeholder' => 'Télefono. Ejemplo: 988888888']) !!}
                            @if ($errors->has('telefono'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('direccion_label', 'Dirección.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::tel('direccion',old('direccion', $paciente->direccion ?? ''), ['class' => 'form-control
                            form-control-sm'.($errors->has('direccion') ? ' is-invalid' : ''),
                            'placeholder' => 'Dirección']) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' =>
                            'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina'
                            => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia',
                            'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun',
                            'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San
                            Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' =>
                            'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule',
                            'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente'
                            => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], old('comuna', $paciente->comuna ?? ''),
                            ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione
                            Comuna']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('sector_label', 'Sector.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::select('sector', ['naranjo' => 'Naranjo', 'celeste' => 'Celeste', 'blanco' => 'Blanco'], old('sector', $paciente->sector), ['class' => 'form-control
                            form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
                        </div>
                    </div>
<hr>
                    <div class="form-group row">
                            {!! Form::label('fellecido_label', 'Fallecido?', ['class' => 'col-sm-2
                            col-form-label']) !!}
                            <div class="col-sm-4">
                                {!! Form::checkbox('fallecido', 1, old('fallecido', $paciente->fallecido) ,['class' => 'form-control form-control col-sm fallecido']) !!}
                            </div>
                            <div class="form-group row fecha_f">
                                {!! Form::label('fecha_fellecido_label', 'Fecha', ['class' => 'col-sm col-form-label']) !!}
                                <div class="col">
                                    {!! Form::date('fecha_fallecido',$paciente->fecha_fallecido, ['class' => 'form-control form-control col-sm']) !!}
                                </div>
                            </div>
                    </div>
                    <hr>
                    {{-- <div class="form-group row">
                        {!! Form::label('ficha_familiar_label', 'Ficha famliar', ['class' => 'col-sm-3
                        col-form-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('familia_id', $familias->pluck('ficha_familiar'), old('ficha_familiar', $paciente->familia->ficha_familiar ?? ''), ['class' => 'form-control', 'placeholder'
                            => 'Seleccione', 'id' => 'ficha_familiar']) !!}
                        </div> --}}
                        {{-- {!! Form::label('erc_label', 'Enf. Renal Crónica', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('erc', ['sin' => 'SIN', 'I' => 'I', 'II' => 'II', 'IIIA' => 'IIIA', 'IIIB'
                            => 'IIIB', 'IV' => 'IV', 'V' => 'V'], old('erc', $paciente->erc), ['class' => 'form-control
                            form-control', 'placeholder' => 'Seleccione', 'id' => 'erc']) !!}
                        </div> --}}
                    </div>

                                        <div class="row">
                                            <div class="col">
                                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                                            </div>
                                            <div class="col">
                                                <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                                                </a>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('#comuna, #sector, #ficha_familiar').select2({
        theme: "classic",
        width: '100%',
    });

    $("#fallecido").removeAttr("checked");

    $('.fecha_f').hide();

    $('.fallecido').click(function () {
        $('.fecha_f').fadeIn()[this.checked ? "show" : "hide"]();
    });

    $('input.actFisica').on('change', function() {
        $('input.actFisica').not(this).prop('checked', false);
    });
    $('input.maltrato').on('change', function() {
        $('input.maltrato').not(this).prop('checked', false);
    });
</script>
@endsection
