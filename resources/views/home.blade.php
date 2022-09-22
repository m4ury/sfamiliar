{{--@extends('layouts.app')--}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalFamilias }}</h3>
                    <p>Total Familias</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('familias.index') }}" class="small-box-footer">Mas información <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $totalPacientes }}</h3>
                    <p>Total Pacientes</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
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
            <div class="small-box bg-gradient-orange">
                <div class="inner">
                    <h3>{{ $totalNaranjo }}</h3>
                    <p>Familias Sector Naranjo</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital-user"></i>
                </div>
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
            </div>
        </div>
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
            </div>
        </div>
    </div>

    <div class="row align-self-center">
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-lightblue">
                <div class="inner">
                    <h3>{{ $totalpCeleste }}</h3>
                    <p>Pacientes Sector Celeste</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-orange">
                <div class="inner">
                    <h3>{{ $totalpNaranjo }}</h3>
                    <p>Pacientes Sector Naranjo</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-white">
                <div class="inner">
                    <h3>{{ $totalpBlanco }}</h3>
                    <p>Pacientes sin Sector</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row align-self-center">
        <div class="col-lg-4 col-4">
            <!-- small box -->
            <div class="small-box bg-gray">
                <div class="inner">
                    <h3>{{ $sinFamilia }}</h3>
                    <p>Pacientes sin Famlia</p>
                </div>
                <div class="icon">
                    <i class="fas fa-question"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
