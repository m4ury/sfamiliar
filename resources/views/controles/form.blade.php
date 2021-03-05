<div class="form-group row">
    {!! Form::label('tipo_control', 'Tipo Control', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::select('tipo_control', ['Medico', 'Enfermera', 'Kinesiologo', 'Nutricionista'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Tipo Control', 'id' => 'tipo']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('fecha_control', 'Fecha', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::date('fecha_control', null, ['class' => 'form-control form-control-sm']) !!}
    </div>
</div>
<hr>
@section('js')
    <script>
        $('#tipo').select2();
@endsection