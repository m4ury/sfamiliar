@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sx-12 col-sm-12 col-lg-8">
            <div class="card card card-success card-outline">
                <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
                <div class="card-body">
                    {{ Form::open(['action' => 'PacienteController@update', 'method' => 'POST', 'url' => 'pacientes/'.$paciente->id, 'class' => 'form-horizontal']) }}
                    @method('PUT')
                    <div class="form-group row">
                        {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('rut', old('rut')?:$paciente->rut, ['class' => 'form-control
                            form-control-sm'.($errors->has('rut')
                            ? ' is-invalid' :
                            old('rut')), 'placeholder' =>
                            'Ej.:16000000-K']) !!}
                            @if ($errors->has('rut'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('rut') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::number('ficha',$paciente->ficha, ['class' => 'form-control
                            form-control-sm'.($errors->has('ficha')
                            ? ' is-invalid' : old('ficha')), 'placeholder' => 'Nº Ficha']) !!}
                            @if ($errors->has('ficha'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('ficha') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
                            {!! Form::text('nombres', $paciente->nombres, ['class' => 'form-control
                            form-control-sm'.($errors->has('nombres') ? '
                            is-invalid' : old('nombres')),
                            'placeholder' => 'Ingrese Nombres']) !!}
                            @if ($errors->has('nombres'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nombres') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('apellidoP',$paciente->apellidoP, ['class' => 'form-control
                            form-control-sm'.($errors->has('apellidoP') ? 'is-invalid' : ''), 'placeholder' => 'Apellido
                            Paterno']) !!}
                            @if ($errors->has('apellidoP'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoP') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::text('apellidoM',$paciente->apellidoM, ['class' => 'form-control
                            form-control-sm'.($errors->has('apellidoM') ? '
                            is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
                            @if ($errors->has('apellidoM'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoM') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::date('fecha_nacimiento',$paciente->fecha_nacimiento, ['class' => 'form-control
                            form-control-sm']) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::tel('telefono',$paciente->telefono, ['class' => 'form-control
                            form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone',
                            'placeholder' => 'Télefono. Ejemplo: 988888888']) !!}
                            @if ($errors->has('telefono'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('direccion_label', 'Dirección.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::tel('direccion',$paciente->direccion, ['class' => 'form-control
                            form-control-sm'.($errors->has('direccion') ? ' is-invalid' : ''),
                            'placeholder' => 'Dirección']) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' =>
                            'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina'
                            => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia',
                            'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun',
                            'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San
                            Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' =>
                            'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule',
                            'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente'
                            => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], $paciente->comuna,
                            ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione
                            Comuna']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('sector_label', 'Sector.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::select('sector', ['naranjo' => 'Naranjo', 'celeste' => 'Celeste', 'blanco' => 'Blanco'], old('sector', $paciente->sector), ['class' => 'form-control
                            form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-5">
                            {!! Form::label('pueblo_originario_label', 'Originario', ['class' => 'col-sm
                            col-form-label']) !!}
                            {!! Form::checkbox('pueblo_originario', 1, old('pueblo_originario',
                            $paciente->pueblo_originario) ,['class' => 'form-control form-control']) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::label('migrante_label', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
                            {!! Form::checkbox('migrante', 1, old('migrante', $paciente->migrante),['class' =>
                            'form-control form-control']) !!}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        {!! Form::label('riesgo_cv_label', 'Riesgo Cardiovascular', ['class' => 'col-sm-3
                        col-form-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('riesgo_cv', ['BAJO' => 'BAJO', 'MODERADO' => 'MODERADO', 'ALTO' =>
                            'ALTO'], old('riesgo_cv', $paciente->riesgo_cv), ['class' => 'form-control', 'placeholder'
                            => 'Seleccione', 'id' => 'riesgo_cv']) !!}
                        </div>
                        {!! Form::label('erc_label', 'Enf. Renal Crónica', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('erc', ['sin' => 'SIN', 'I' => 'I', 'II' => 'II', 'IIIA' => 'IIIA', 'IIIB'
                            => 'IIIB', 'IV' => 'IV', 'V' => 'V'], old('erc', $paciente->erc), ['class' => 'form-control
                            form-control', 'placeholder' => 'Seleccione', 'id' => 'erc']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('compensado_label', 'Compensado', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('compensado', [1 => 'Compensado', 2 => 'Descompensado'], old('compensado',
                            $paciente->compensado), ['class' => 'form-control', 'placeholder' => 'Seleccione', 'id' => 'compensado']) !!}
                        </div>
                    </div>

                    <hr>
                    @if($paciente->edad() >= 65)
                        @include('partials.empam')
                        @endif

                        @foreach($paciente->patologias as $patologia)
                            @if($patologia->nombre_patologia == 'HTA')
                                <div class="form-group row card card-danger card-outline">
                                    <div class="card-header text-bold text-red">HIPERTENSION ARTERIAL</div>
                                    <div class="card-body row form-group">
                                        {!! Form::label('rac_vigente_label', 'CON RAZON ALBÚMINA CREATININA (RAC)', ['class' =>
                                        'col-sm-6 col-form-label']) !!}
                                        <div class="col-sm-6">
                                            {!! Form::date('racVigente', old('racVigente', $paciente->racVigente), ['class' =>
                                            'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                @elseif($patologia->nombre_patologia == 'DM2')
                                    <div class="form-group row card card-primary card-outline">
                                        <div class="card-header text-bold text-primary">DIABETES MELITUS</div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('vfg_vigente_label', 'CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG)',
                                            ['class' => 'col-sm-6 col-form-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::date('vfgVigente', old('vfgVigente', $paciente->vfgVigente), ['class' =>
                                                'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('fondoOjoVigente_label', 'CON FONDO DE OJO', ['class' => 'col-sm-6
                                            col-form-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::date('fondoOjoVigente', old('fondoOjoVigente', $paciente->fondoOjoVigente),
                                                ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('ecgVigente_label', 'CON ECG', ['class' => 'col-sm-6 col-form-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::date('ecgVigente', old('ecgVigente', $paciente->ecgVigente), ['class' =>
                                                'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('ldlVigente_label', 'CON UN EXÁMEN DE COLESTEROL LDL', ['class' => 'col-sm-6
                                            col-form-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::date('ldlVigente', old('ldlVigente', $paciente->ldlVigente), ['class' =>
                                                'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('controlPodologico_alDia_label', 'CON CONTROL PODOLOGICO AL DIA', ['class'
                                            => 'col-sm-6 col-form-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::date('controlPodologico_alDia', old('controlPodologico_alDia',
                                                $paciente->controlPodologico_alDia), ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('usoInsulina_label', 'EN TRATAMIENTO CON INSULINA', ['class' => 'col-sm-3
                                            col-form-label']) !!}
                                            <div class="col-sm-3">
                                                {!! Form::checkbox('usoInsulina', 1, old('usoInsulina',
                                                $paciente->usoInsulina), ['class' => 'form-control']) !!}
                                            </div>
                                            {!! Form::label('usoIecaAraII_label', 'EN TRATAMIENTO CON IECA O ARA II', ['class' =>
                                            'col-sm-3
                                            col-form-label']) !!}
                                            <div class="col-sm-3">
                                                {!! Form::checkbox('usoIecaAraII', 1, old('usoIecaAraII',
                                                $paciente->usoIecaAraII), ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            {!! Form::label('aputacionPieDM2_label', 'CON AMPUTACIÓN PIE DIABETICO', ['class'
                                            => 'col-sm-6 col-form-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::date('aputacionPieDM2', old('aputacionPieDM2',
                                                $paciente->aputacionPieDM2), ['class' => 'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($patologia->nombre_patologia == 'ANTECEDENTE IAM' or $patologia->nombre_patologia ==
                                        'ANTECEDENTE ACV')
                                        <div class="form-group row card card-info card-outline">
                                            <div class="card-header text-bold text-info">CON ANTECEDENTE DE ATAQUE CEREBRO
                                                VASCULAR /
                                                INFARTO AL MIOCARDIO
                                            </div>
                                            <div class="card-body row form-group">
                                                {!! Form::label('usoAspirinas_label', 'EN TRATAMIENTO CON ACIDO ACETILSALICILICO', ['class'
                                                =>
                                                'col-sm-3 col-form-label']) !!}
                                                <div class="col-sm-3">
                                                    {!! Form::checkbox('usoAspirinas', 1, old('usoAspirinas',
                                                    $paciente->usoAspirinas), ['class' => 'form-control']) !!}
                                                </div>
                                                {!! Form::label('usoEstatinas_label', 'EN TRATAMIENTO CON ESTATINA', ['class' =>
                                                'col-sm-3 col-form-label']) !!}
                                                <div class="col-sm-3">
                                                    {!! Form::checkbox('usoEstatinas', 1, old('usoEstatinas',
                                                    $paciente->usoEstatinas), ['class' => 'form-control']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        <div class="row">
                                            <div class="col">
                                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                                            </div>
                                            <div class="col">
                                                <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                                                </a>
                                            </div>
                                        </div>
                                        {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('#riesgo_cv, #erc, #compensado, #funcionalidad, #riesgoCaida, #unipodal, #dependencia').select2({
        theme: "classic",
        width: '100%',
    });

    $("#maltrato, #actFisica").removeAttr("checked");

    $('input.actFisica').on('change', function() {
        $('input.actFisica').not(this).prop('checked', false);
    });
    $('input.maltrato').on('change', function() {
        $('input.maltrato').not(this).prop('checked', false);
    });
</script>
@endsection