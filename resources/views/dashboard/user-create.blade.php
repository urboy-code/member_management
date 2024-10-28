@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Menambahkan Pengguna</h1>
@stop

@section('content')
    <a href="{{ route('users.index') }}" type="button" class="btn btn-success mb-3">Kembali</a>

    <div class="main-content mt-2">
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="" class="form-label">Nama </label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Role</label>
                    <select name="role_id" class="form-control">
                        <option value="">Pilih Role</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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
