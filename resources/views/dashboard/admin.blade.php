@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container d-flex ">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Total Anggota Hari </h5>
                <p class="card-text">{{ $totalToday }}</p>
            </div>
        </div>
        <div class="card mx-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Total Anggota Hari </h5>
                <p class="card-text">{{ $totalMembers }}</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <canvas id="registrationChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementById('registrationChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode(array_column($dataPoints, 'time')) !!},
                datasets: [{
                    label: 'Pendaftaran Anggota per 5 Menit',
                    data: {!! json_encode(array_column($dataPoints, 'count')) !!},
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.8)',
                    fill: true,
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Waktu'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Jumlah Pendaftaran'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>

@stop
