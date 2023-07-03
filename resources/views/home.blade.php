{{-- @extends('layouts.app') --}}
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
                        <p>Pacientes Sector Blanco</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('pacientes.blancos') }}" class="small-box-footer" target="_blank">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
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
                    <a href="{{ route('pacientes.sin_familia') }}" class="small-box-footer" target="_blank">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-4">
                <!-- small box -->
                <div class="small-box bg-gray">
                    <div class="inner">
                        <h3>{{ $sinIntegrantes }}</h3>
                        <p>Famlias sin Integrantes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <a href="{{ route('familias.sin_integrantes') }}" class="small-box-footer" target="_blank">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-4">
                <!-- small box -->
                <div class="small-box bg-white">
                    <div class="inner">
                        <h3>{{ $fallecidos }}</h3>
                        <p>Pacientes fallecidos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cross"></i>
                    </div>
                    <a href="{{ route('pacientes.fallecidos') }}" class="small-box-footer" target="_blank">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row align-self-center">
            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{ $masculino9 }}</h3>
                        <p>Hombres menores de 9 años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-mars"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{ $masculino1019 }}</h3>
                        <p>Hombres entre 10 y 19 años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-mars"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{ $masculino2064 }}</h3>
                        <p>Hombres entre 20 y 64 años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-mars"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3>{{ $masculino65mas }}</h3>
                        <p>Hombres de 65 años y mas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-mars"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="row align-self-center">
            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h3>{{ $femenino9 }}</h3>
                        <p>Mujeres menores de 9 años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-venus"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h3>{{ $femenino1019 }}</h3>
                        <p>Mujeres entre 10 y 19 años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-venus"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h3>{{ $femenino2064 }}</h3>
                        <p>Mujeres entre 20 y 64 años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-venus"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-pink">
                    <div class="inner">
                        <h3>{{ $femenino65mas }}</h3>
                        <p>Mujeres de 65 años y mas</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-venus"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
