
<div class="col pb-2">
    <div class="card card-outline card-dark">
        <div class="col-md-12 table-responsive pt-3">
            <table class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Rut</th>
                        <th>Nombre Completo</th>
                        <th>Nº Ficha Clinica</th>
                        <th>Ficha familiar</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Sector</th>
                        <th>Jefe Hogar</th>
                        <th>Eliminar integrante</th>
                    </tr>
                </thead>
            <tbody>
                    @foreach($pacientes as $paciente)
                <tr>
                    <td nowrap="">{{ $paciente->rut }}</td>
                    <td class="text-uppercase">{{ $paciente->fullName() }}</td>
                    <td>{{ $paciente->ficha }}</td>
                    <td class="text-uppercase">{{ $paciente->familia->sector ?? " " }}{{ $paciente->familia->ficha_familiar ?? " " }}</td>
                    <td>{{ $paciente->edad() }}</td>
                    <td>{{ $paciente->sexo }}</td>
                    @if($paciente->sector == 'celeste')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-primary"></i></span> Celeste
                        </td>
                    @else($paciente->sector == 'naranjo')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-orange"></i></span> Naranjo
                        </td>
                    @endif
                    <td>
                        <i class="fas {{ $paciente->jefe_hogar == 1 ? 'fa-key' : ""}}"></i>
                    </td>
                    <td>{{ Form::open(['action' => 'PacienteController@eliminarInt', 'method' => 'POST', 'class' => 'col-sm-3 float-right confirm']) }}
                        
                        {!! Form::button('<i class="fas fa-trash"> Eliminar </i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm float-right', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Eliminar'] ) !!}
                    {{ Form::close() }}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
