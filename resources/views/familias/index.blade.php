@extends('adminlte::page')

@section('title', 'familias')

@section('content')
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo familia" href="{{ route('familias.create') }}">
            <i class="fas fa-users">
            </i>
            Nueva Familia
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="familias" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Nº Ficha Familiar</th>
                <th>Familia</th>
                <th>Direccion</th>
                <th>Sector</th>
                <th>N° Integrantes</th>
            </tr>
            </thead>
            <tbody>
            @foreach($familias as $familia)
                <tr>
                    <td class="text-uppercase"><a href="{{ route('familias.show', $familia->id) }}">{{ $familia->fichaFamiliar() }}</a></td>
                    <td class="text-uppercase">{{ $familia->familia }}</td>
                    <td class="text-uppercase">{{$familia->domicilio}}</td>
                    @if($familia->sector == 'SA')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-primary"></i></span> Celeste
                        </td>
                    @elseif($familia->sector == 'SB')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-orange"></i></span> Naranjo
                        </td>
                        @else
                        <td><span class="mr-2">
                    <i class="fas fa-square text-white"></i></span> Blanco
                        </td>
                    @endif
                    <td><i class="fas fa-users"></i> {{ $familia->pacientes->count('rut') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script>
        $("#familias").DataTable(
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
                    },
                    order: [[0, 'asc']],
            });
    </script>
@endsection
