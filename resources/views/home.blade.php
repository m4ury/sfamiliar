{{--@extends('layouts.app')--}}
@extends('adminlte::page')

@section('title', 'Home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalPacientes }}</h3>
                        <p>Total Pacientes</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('pacientes.index') }}" class="small-box-footer">Mas información <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
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
            <div class="col-lg-2 col-6">
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
            <div class="col-lg-2 col-6">
                <!-- small box -->
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3>{{ $totalNaranjo }}</h3>
                        <p>Pacientes Sector Naranjo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=naranjo') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
                <div class="col-lg-2 col-6">
                    <div class="small-box bg-gradient-lightblue">
                        <div class="inner">
                            <h3>{{ $totalCeleste }}</h3>
                            <p>Pacientes Sector Celeste</p>
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
    </div>
    {{--<div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>Total pacientes: {{ $totalPacientes  }}</p>
                </div>
                <div class="col">
                    <p>Total Masculino: {{ $totalMasculino  }}</p>
                </div>
                <div class="col">
                    <p>Total Femenino: {{ $totalFemenino  }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="col">
                    <canvas id="myPieChart2"></canvas>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
@section('js')
    <script>
        var ctx = document.getElementById('myPieChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Mujeres', 'Hombres'],
                datasets: [{
                    label: 'Q Pacientes por Sexo',
                    data: [{{$totalFemenino}}, {{$totalMasculino}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('myPieChart2').getContext('2d');
        var myPieChart2 = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Celeste', 'Naranjo'],
                datasets: [{
                    label: 'Q Pacientes por Sector',
                    data: [{{$totalCeleste}}, {{$totalNaranjo}}],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            }
        });
    </script>
    {{--<script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>--}}
@endsection
