@extends('adminlte::page')

@section('title', 'Rekaptulation')

@section('content_header')
    <h1>Rekaptulation Member Monthly</h1>
@stop

@section('content')
    {{-- Rekap Anggota Tingkat Provinsi --}}
    <div class="container">
        <h3>Tingkat Provinsi</h3>
        <a href="{{ route('rekaptulasi.export') }}" class="btn btn-success mb-2">Export
            Provinsi</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Provinsi</th>
                    <th scope="col">Total Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($provinsi as $index => $provinsi)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $provinsi->name }}</td>
                        <td>{{ $provinsi->members_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Rekap Anggota Tingkat Kabupaten --}}
    <div class="container">
        <h3>Tingkat Provinsi</h3>
        <a href="{{ route('rekaptulasi.export') }}" class="btn btn-success mb-2">Export
            Kabupaten</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Provinsi</th>
                    <th scope="col">Total Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kabupaten as $index => $kabupaten)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $kabupaten->name }}</td>
                        <td>{{ $kabupaten->members_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Rekap Anggota Tingkat Kecamatan --}}
    <div class="container">
        <h3>Tingkat Kecamatan</h3>
        <a href="{{ route('rekaptulasi.export') }}" class="btn btn-success mb-2">Export
            Kecamatan</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Provinsi</th>
                    <th scope="col">Total Anggota</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kecamatan as $index => $kecamatan)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $kecamatan->name }}</td>
                        <td>{{ $kecamatan->members_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Rekap Anggota Tingkat Desa --}}
    <div class="container">
        <h3>Tingkat Kelurahan</h3>
        <a href="{{ route('rekaptulasi.export') }}" class="btn btn-success mb-2">Export
            Kelurahan</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">No. HP</th>
                    <th scope="col">Provisni</th>
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kelurahan</th>
                    <th scope="col">Tanggal Mendaftar</th>
            </thead>
            <tbody>
                @foreach ($member as $index => $member)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->ktp_number }}</td>
                        <td>{{ $member->phone_number }}</td>
                        <td>{{ optional($member->provinsi)->name }}</td>
                        <td>{{ optional($member->kabupaten)->name }}</td>
                        <td>{{ optional($member->kecamatan)->name }}</td>
                        <td>{{ optional($member->kelurahan)->name }}</td>
                        <td>{{ $member->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
