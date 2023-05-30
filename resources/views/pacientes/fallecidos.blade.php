@extends('adminlte::page')

@section('title', 'pacientes')

@section('content')
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Nº Ficha Clinica</th>
                    <th>Fecha fallecido</th>
                    <th>Ficha familiar</th>
                    <th>Sexo</th>
                    <th>Sector</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes->lazy() as $paciente)
                    <tr>
                        <td nowrap=""><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->rut }}</a>
                        </td>
                        <td class="text-uppercase">{{ $paciente->fullName() }}</td>
                        <td>{{ $paciente->ficha }}</td>
                        <td>{{ $paciente->fecha_fallecido->format('d-m-Y') ?? ' ' }} </td>
                        <td class="text-uppercase"><a
                                href="{{ route('familias.show', $paciente->familia->id ?? '') }}">{{ $paciente->familia->sector ?? ' ' }}{{ $paciente->familia->ficha_familiar ?? ' ' }}
                        </td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>
                            @if ($paciente->sector == 'celeste')
                                <span class="mr-2"><i class="fas fa-square text-primary"></i></span> Celeste
                            @elseif($paciente->sector == 'naranjo')
                                <span class="mr-2"><i class="fas fa-square text-orange"></i></span> Naranjo
                            @else
                                <i class="fas fa-square text-white"></i> Blanco
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script>
        $("#pacientes").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'colvis',
                'excel',
                'pdf',
                'print',
            ],
            language: {
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
            //order: [[3, 'asc']],
        });
    </script>
@endsection
