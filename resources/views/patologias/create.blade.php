@extends('adminlte::page')
@section('title', 'crear-patologias')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Datos de la Patologia</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'PatologiaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        @include('patologias.form')
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
                                $('#comuna, #sexo, #sector').select2();
                                $("#migrante, #pueblo_originario").removeAttr("checked");
                                /*$('#input1, #input2').iCheck('check');*/
                            </script>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
