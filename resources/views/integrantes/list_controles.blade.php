
<div class="col pb-2">
    <div class="card card-outline card-dark">
        <div class="col-md-12 table-responsive pt-3">
            <table class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Rut</th>
                        <th>Nombre Completo</th>
                        <th>Nº Ficha Clinica</th>
                        <th>F.Nacimiento</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>E.Civil</th>
                        <th>Sector</th>
                        <th>Jefe Hogar</th>
                        <th>Parentesco</th>
                        <th>Elim. integrante</th>
                    </tr>
                </thead>
            <tbody>
                    @foreach($pacientes as $paciente)
                <tr>
                    <td nowrap="">{{ $paciente->rut }}</td>
                    <td class="text-uppercase">{{ $paciente->fullName() }}</td>
                    <td>{{ $paciente->ficha }}</td>
                    <td>{{ $paciente->fecha_nacimiento }}</td>
                    <td>{{ $paciente->edad() }}</td>
                    <td>{{ $paciente->sexo }}</td>
                    <td>{{ $paciente->e_civil }}</td>
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
                    <td>{{ $paciente->parentesco }}</td>
                    <td>{{ Form::open(['action' => 'PacienteController@update', 'method' => 'POST', 'route' => ['elimina', $paciente->id], 'class' => 'col-sm-3 float-right']) }}
                        @csrf
                        {!! Form::button('<i class="fas fa-minus-circle"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm float-right', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Eliminar'] ) !!}
                    {{ Form::close() }}</td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
