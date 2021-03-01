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
                        <p>Pacientes Sector Naranjo</p>
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
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Pacientes por rango etareo</h3>
                            {{--<a href="javascript:void(0);">View Report</a>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">{{ $totalPacientes }}</span>
                                <span>Total Pacientes</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                    {{--<span class="text-success">
                      <i class="fas fa-arrow-up"></i> 33.1%
                    </span>--}}
                                {{--<span class="text-muted">Since last month</span>--}}
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                    <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                    <div class=""></div>
                                </div>
                            </div>
                            <canvas id="myChart" height="200" style="display: block; width: 759px; height: 200px;"
                                    width="759" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Entre 15 y 19', 'Entre 20 y 24', 'Entre 25 y 29', 'Entre 30 y 34', 'Entre 35 y 39', 'Entre 40 y 44', 'Entre 45 y 49', 'Entre 50 y 54', 'Entre 55 y 59', 'Entre 60 y 64', 'Entre 65 y 69', 'Entre 70 y 74', 'Entre 75 y 79', 'Entre 80 y Mas'],
                datasets: [{
                    label: 'q Pacientes',
                    data: [
                        {{$in1519}}, {{$in2024}}, {{$in2529}}, {{$in3034}}, {{$in3539}}, {{$in4044}}, {{$in4549}}, {{$in5054}},{{$in5559}}, {{$in6064}},{{$in6569}}, {{$in7074}},{{$in7579}}, {{$mas80}}
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgba(0, 255, 0, 0.2)',
                        'rgba(255, 255, 0, 0.2)',
                        'rgba(0, 255, 255, 0.2)',
                        'rgba(255, 0, 255, 0.2)',
                        'rgba(128, 128, 128, 0.2)',
                        'rgba(0, 128, 0, 0.2)',
                        'rgba(0, 0, 128, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
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
    </script>
@endsection
