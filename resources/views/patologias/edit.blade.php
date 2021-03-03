@extends('adminlte::page')
@section('title', 'editar-patologias')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Editando patologia</div>
                    <div class="card-body">
                        {{ Form::open(['action' => route('patologias.update', $patologia->id), 'method' => 'POST', 'url' => 'patologias/'.$patologia->id, 'class' => 'form-horizontal']) }}
                        @csrf
                        @method('PATCH')
                        @include('patologias.form')
                        {{--<div class="form-group row">
                            {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-6">
                                {!! Form::text('rut', $patologia->rut, ['class' => 'form-control
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
                                {!! Form::text('nombres', $patologia->nombres, ['class' => 'form-control
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
                                {!! Form::text('apellidoP',$patologia->apellidoP, ['class' => 'form-control
                                form-control-sm'.($errors->has('apellidoP') ? 'is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
                                @if ($errors->has('apellidoP'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoP') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('apellidoM',$patologia->apellidoM, ['class' => 'form-control
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
                                {!! Form::date('fecha_nacimiento',$patologia->fecha_nacimiento, ['class' => 'form-control
                                form-control-sm']) !!}
                            </div>
                        <!--  <div class="col-sm-5">
                                {!! Form::select('sexo', array('Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'Otro'), $patologia->sexo, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción...']) !!}
                                </div> -->
                        </div>
                        <div class="form-group row">
                            {!! Form::label('telefono', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::tel('telefono',$patologia->telefono, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' => '12345678']) !!}
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <hr>--}}
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('patologias.index') }}" style="text-decoration:none">
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
