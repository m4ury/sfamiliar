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
