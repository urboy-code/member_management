@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Menambahkan Pengguna</h1>
@stop

@section('content')
    <a href="{{ route('users.index') }}" type="button" class="btn btn-success mb-3">Kembali</a>

    <div class="main-content mt-2">
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="" class="form-label">Nama </label>
                    <input type="text" class="form-control" name="nama" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email </label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Password </label>
                    <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Role</label>
                    <select name="role_id" class="form-control">
                        <option value="">Pilih Role</option>
                        @foreach ($roles as $role)
                            <option {{ $role->id === $user->role_id ? 'selected' : '' }} value="{{ $role->id }}">
                                {{ $role->name }}</option>
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
