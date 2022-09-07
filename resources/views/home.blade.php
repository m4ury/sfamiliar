{{--@extends('layouts.app')--}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row align-self-center">
        <div class="col-lg col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalFamilias }}</h3>
                    <p>Total Familias</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('pacientes.index') }}" class="small-box-footer">Mas información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-pink">
                <div class="inner">
                    <h3>{{ $totalFemenino }}</h3>
                    <p>Total Pacientes Mujeres</p>
                </div>
                <div class="icon">
                    <i class="fas fa-female"></i>
                </div>
                <a href="{{ url('/pacientes?q=femenino') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h3>{{ $totalMasculino }}</h3>
                    <p>Total Pacientes Hombres</p>
                </div>
                <div class="icon">
                    <i class="fas fa-male"></i>
                </div>
                <a href="{{ url('/pacientes?q=masculino') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-orange">
                <div class="inner">
                    <h3>{{ $totalNaranjo }}</h3>
                    <p>Familias Sector Naranjo</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
                <a href="{{ url('/pacientes?q=naranjo') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-gradient-lightblue">
                <div class="inner">
                    <h3>{{ $totalCeleste }}</h3>
                    <p>Familias Sector Celeste</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
                <a href="{{ url('/pacientes?q=celeste') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <!-- ./col -->
</div>
@endsection
