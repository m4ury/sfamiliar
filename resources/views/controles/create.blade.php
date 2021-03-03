@extends('adminlte::page')
@section('title', 'crear-control')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Nuevo Control</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ControlController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        @include('controles.form')
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('controles') }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}

                        @section('js')
                            <script>
                                $('#comuna, #sexo, #sector').select2();
                                $("#migrante, #pueblo_originario").removeAttr("checked");
                            </script>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
