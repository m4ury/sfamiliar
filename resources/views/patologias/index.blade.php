@extends('adminlte::page')

@section('title', 'patologias')

@section('content')

    <div class="col-md-12">
        {{--success alert al crear--}}
        {{--@if(session()->has('success'))
            <div id="alert" class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif--}}
        <div class="page-header">
            <div class="form-group">
                {!! Form::open(['route' => 'patologias.index', 'method' => 'GET', 'class' => 'form-inline float-right pb-2'])
                !!}
                {{ Form::text('q', null, ['class' => 'form-control mx-1', 'placeholder' => 'Buscar'], isset($q) ? $q : '') }}
                <button type="submit" class="btn btn-secondary form-control"><span><i
                                class="fas fa-search"></i></span></button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nueva patologia" href="{{ route('patologias.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nueva patologia
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="patologias" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th colspan="2" class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patologias as $patologia)
                <tr>
                    <td><a href="{{ route('patologias.show', $patologia->id) }}">{{ $patologia->rut }}</a></td>
                    <td>{{ $patologia->fullName() }}</td>
                    <td>{{ $patologia->ficha }}</td>
                    <td>{{ $patologia->edad() }}</td>
                    <td>{{ $patologia->sexo }}</td>
                    @if($patologia->sector == 'celeste')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-primary"></i></span> Celeste
                        </td>
                    @else($patologia->sector == 'naranjo')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-orange"></i></span> Naranjo
                        </td>
                    @endif
                    <td>
                        @switch($patologia->edad())
                            @case($patologia->edad()>=15 && $patologia->edad()<= 19)
                            {{ "Entre 15 y 19" }}
                            @break
                            @case($patologia->edad()>=20 && $patologia->edad()<= 24)
                            {{ "Entre 20 y 24" }}
                            @break
                            @case($patologia->edad()>=25 && $patologia->edad()<= 29)
                            {{ "Entre 25 y 29" }}
                            @break
                            @case($patologia->edad()>=30 && $patologia->edad()<= 34)
                            {{ "Entre 30 y 34" }}
                            @break
                            @case($patologia->edad()>=35 && $patologia->edad()<= 39)
                            {{ "Entre 35 y 39" }}
                            @break
                            @case($patologia->edad()>=40 && $patologia->edad()<= 44)
                            {{ "Entre 40 y 44" }}
                            @break
                            @case($patologia->edad()>=45 && $patologia->edad()<= 49)
                            {{ "Entre 45 y 49" }}
                            @break
                            @case($patologia->edad()>=50 && $patologia->edad()<= 54)
                            {{ "Entre 50 y 54" }}
                            @break
                            @case($patologia->edad()>=55 && $patologia->edad()<= 59)
                            {{ "Entre 55 y 59" }}
                            @break
                            @case($patologia->edad()>=60 && $patologia->edad()<= 64)
                            {{ "Entre 60 y 64" }}
                            @break
                            @case($patologia->edad()>=65 && $patologia->edad()<= 69)
                            {{ "Entre 65 y 69" }}
                            @break
                            @case($patologia->edad()>=70 && $patologia->edad()<= 74)
                            {{ "Entre 70 y 74" }}
                            @break
                            @case($patologia->edad()>=75 && $patologia->edad()<= 79)
                            {{ "Entre 75 y 79" }}
                            @break
                            @default
                            {{ "80 y Màs" }}
                        @endswitch
                    </td>
                    <td>
                        <a class="btn bg-gradient-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                           title="Editar"
                           href="{{ route('patologias.edit', $patologia->id) }}"><i class="fas fa-pen"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $patologias->appends(['q' => $q])->links() }}
    </div>
@stop
{{--@section('js')
    <script>
        $("#patologias").DataTable();
    </script>
@endsection--}}
