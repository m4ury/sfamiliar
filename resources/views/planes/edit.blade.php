@extends('adminlte::page')
@section('title', 'edit-plan')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col">
                <div class="card card-success card-outline">
                    <div class="card-body">
                            {!! Form::model($plan, [
                                'route' => ['familias.planes.update', $familia, $plan],
                                'method' => 'PUT',
                                'class' => 'form-horizontal',
                            ]) !!}
                        <div class="tab-content" id="nav-tabContent">
                            @include('planes.form')
                        </div>
                        <div class="row">
                            <div class="col">
                                {!! Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) !!}
                            </div>
                            <div class="col">
                                <a href="{{ url('familias/' . $plan->familia->id) }}"
                                    class="btn bg-gradient-secondary btn-sm btn-block">
                                    Cancelar
                                </a>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
