@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Editando Paciente</div>
                    <div class="card-body">
                        {{ Form::open(['action' => route('pacientes.update', $paciente->id), 'method' => 'PUT', 'url' => 'pacientes/'.$paciente->id, 'class' => 'form-horizontal']) }}
                        <div class="form-group row">
                            {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('rut', $paciente->rut, ['class' => 'form-control
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
                                form-control-sm'.($errors->has('apellidoP') ? 'is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
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
                        <!--  <div class="col-sm-5">
                                {!! Form::select('sexo', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'Otro'), $paciente->sexo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción...']) !!}
                                </div> -->
                        </div>
                        <div class="form-group row">
                            {!! Form::label('telefono', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::tel('telefono',$paciente->telefono, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' => '12345678']) !!}
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-5">
                                {!! Form::label('pueblo_originario', 'Originario', ['class' => 'col-sm col-form-label']) !!}
                                {!! Form::checkbox('pueblo_originario', $paciente->compensado==1?true:0, $paciente->pueblo_originario == 1?true:0, ['class' => 'form-control form-control']) !!}
                            </div>
                            <div class="col-sm-5">
                                {!! Form::label('migrante', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
                                {!! Form::checkbox('migrante', $paciente->compensado==1?true:0, $paciente->migrante ==1?true:0, ['class' => 'form-control form-control']) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                {!! Form::label('riesgo_cv_label', 'Riesgo Cardiovascular', ['class' => 'col-sm-5 col-form-label']) !!}
                                {!! Form::select('riesgo_cv', ['Bajo' => 'Bajo', 'Medio' => 'Medio', 'Alto' => 'Alto'], old('riesgo_cv', $paciente->riesgo_cv), ['class' => 'form-control-sm form-control-sm-4', 'placeholder' => 'Riesgo Cardiovascular']) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('compensado_label', 'Compensado', ['class' => 'col-sm col-form-label']) !!}
                                {!! Form::checkbox('compensado', $paciente->compensado==1?true:0, $paciente->compensado==1?true:0, ['class' => 'form-control form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                {!! Form::label('erc_label', 'Enf. Renal Crónica', ['class' => 'col-sm-5 col-form-label']) !!}
                                {!! Form::select('erc', ['sin' => 'SIN', 'I' => 'I', 'II' => 'II','IIA' => 'IIA', 'III' => 'III', 'IIIA' => 'IIIA', 'IIIB' => 'IIIB', 'IIIB-IV' => 'IIIB-IV', 'IV' => 'IV', 'V' => 'V'], old('erc', $paciente->erc), ['class' => 'form-control-sm form-control-sm-4', 'placeholder' => 'ERC ']) !!}
                            </div>
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
@stop
