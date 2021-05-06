@extends('adminlte::page')
@section('title', 'editar-control')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Editando control</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ControlController@update', 'method' => 'POST', 'url' => 'controles/'.$control->id, 'class' => 'form-horizontal']) }}
                        @csrf
                        @method('PATCH')
                        {{-- @include('controles.form')--}}
                        <div class="form-group row my-2 ml-2">
                            {!! Form::label('last', 'Ultimo Control SI', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
                            <div class="col-sm-3">
                                {!! Form::checkbox('last', 1, old('last', $control->last),['class' => 'form-control my-2 last']) !!}
                            </div>
                            {!! Form::label('last', 'Ultimo Control NO', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
                            <div class="col-sm-3">
                                {!! Form::checkbox('last', 2, null, ['class' => 'form-control my-2 last']) !!}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('controles-all') }}" style="text-decoration:none">
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
    @section('js')
        <script>
            $('input.last').on('change', function () {
                $('input.last').not(this).prop('checked', false);
            });
        </script>
        @endsection
@stop
