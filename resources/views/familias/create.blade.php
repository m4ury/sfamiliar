@extends('adminlte::page')
@section('title', 'crear-familia')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header">Identificacion familia</div>
                    <div class="card-body">
                        @include('familias.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#sector, #comuna, #tipo_familia, #etapa_cicloVital').select2({
            theme: "classic",
            width: '100%',
        });
    </script>
@endsection
