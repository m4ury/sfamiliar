@extends('adminlte::page')

@section('title', 'proximos-controles')

@section('content')
    <div class="row">
        <div class="page-header">
            {!! Form::open(['route' => 'proximos', 'method' => 'GET', 'class' => 'form-inline float-right pb-3']) !!}

            {!! Form::select('q', ['01' => 'Enero', '02' => 'Febrero', '03' => 'Marzo', '04' => 'Abril', '05' => 'Mayo', '06' => 'Junio', '07' => 'Julio', '08' => 'Agosto', '09' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre'], null, ['class' => 'form-control', 'placeholder' => 'Busqueda por mes', 'id' => 'q']) !!}
            <button type="submit" class="btn btn-secondary btn-block form-control mt-2">
                <span><i class="fas fa-search"> Buscar</i></span>
            </button>
            {!! Form::close() !!}
        </div>
        <div class="col-md-12 table-responsive">
            <table id="proximos" class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                <tr>

                    <th>Paciente</th>
                    <th>RUT. Paciente</th>
                    <th>Nº Ficha
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Fecha prox. control</th>
                    <th>Profesional prox. control</th>
                    <th>Examenes</th>
                    <th>Modalidad</th>
                </tr>
                </thead>
                <tbody>
                @foreach($controles as $control)
                    @if($control->paciente)
                        <tr>
                            <td class="text-uppercase">{{ $control->paciente->fullName() }}</td>
                            <td>{{ $control->paciente->rut }}</td>
                            <td>{{ $control->paciente->ficha }}</td>
                            <td>{{ $control->paciente->telefono }}</td>
                            <td>{{ $control->paciente->direccion }}, {{ $control->paciente->comuna }}</td>
                            <td>{{ \Carbon\Carbon::parse($control->proximo_control)->format("d-m-Y") }}</td>
                            <td>{{ $control->prox_tipo }}</td>
                            <td>{{ $control->examen }}</td>
                            <td>{{ $control->tipo_atencion }}</td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script>
        $('#q').select2({
            theme: "classic",
            width: '100%',
        });
        $("#proximos").DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    'excel',
                    'pdf',
                    'print',
                ],
                language:
                    {
                        "processing": "Procesando...",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No se encontraron resultados",
                        "emptyTable": "Ningún dato disponible en esta tabla",
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "infoThousands": ",",
                        "loadingRecords": "Cargando...",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "aria": {
                            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
            }
        );
    </script>
@endsection
