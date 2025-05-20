@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content')
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo Paciente" href="{{ route('pacientes.create') }}">
            <i class="fas fa-user-plus"></i> Nuevo Paciente
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Nº Ficha Clínica</th>
                    <th>Fallecido</th>
                    <th>Ficha Familiar</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Sector</th>
                    <th>Grupo Etareo</th>
                </tr>
            </thead>
        </table>
    </div>
@stop

@section('plugins.Datatables', true)

@section('js')
    <script>
        $(document).ready(function() {
            $('#pacientes').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('pacientes.data') }}",
                columns: [{
                        data: 'rut',
                        name: 'rut',
                        render: function(data, type, row) {
                            return `<a href="/pacientes/${row.id}" title="Ver información del paciente">${data}</a>`;
                        }
                    },
                    {
                        data: 'fullName',
                        name: 'fullName'
                    },
                    {
                        data: 'ficha',
                        name: 'ficha'
                    },
                    {
                        data: 'fallecido',
                        name: 'fallecido',
                        render: function(data, type, row) {
                            if (data == 1 && row.fecha_fallecido) {
                                // Formatear la fecha de fallecimiento
                                const fecha = new Date(row.fecha_fallecido);
                                const formatoCorto = fecha.toISOString().split('T')[
                                    0]; // Obtiene el formato YYYY-MM-DD
                                return `<i class="fa fa-cross text-orange mx-3"></i> ${formatoCorto}`;
                            }
                            return ''; // Si no está fallecido o no hay fecha, retorna vacío
                        }
                    },
                    {
                        data: 'fichaFamiliar',
                        name: 'fichaFamiliar',
                        render: function(data, type, row) {
                            if (row.familiaId) {
                                return `<a href="/familias/${row.familiaId}" title="Ver información de la familia">${data}</a>`;
                            }
                            return data;
                        }
                    },
                    {
                        data: 'edad',
                        name: 'edad'
                    },
                    {
                        data: 'sexo',
                        name: 'sexo'
                    },
                    {
                        data: 'sector',
                        name: 'sector',
                        render: function(data) {
                            if (data == 'celeste')
                                return '<i class="fas fa-square text-primary"></i> Celeste';
                            if (data == 'naranjo')
                                return '<i class="fas fa-square text-orange"></i> Naranjo';
                            return '<i class="fas fa-square text-white"></i> Blanco';
                        }
                    },
                    {
                        data: 'grupoEtareo',
                        name: 'grupoEtareo'
                    }
                ],
                language: {
                    processing: "Procesando...",
                    lengthMenu: "Mostrar _MENU_ registros",
                    zeroRecords: "No se encontraron resultados",
                    emptyTable: "Ningún dato disponible en esta tabla",
                    info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                    infoFiltered: "(filtrado de un total de _MAX_ registros)",
                    search: "Buscar:",
                    paginate: {
                        first: "Primero",
                        last: "Último",
                        next: "Siguiente",
                        previous: "Anterior"
                    }
                }
            });
        });
    </script>
@endsection
