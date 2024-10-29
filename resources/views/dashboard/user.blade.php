@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>Daftar Pengguna</h1>
@stop

@section('content')
    <a href="{{ route('users.create') }}" type="button" class="btn btn-success mb-3">Tambahkan Pengguna</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pengguna</th>
                <th scope="col">Email Pengguna</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('users.edit', $user->id) }}" type="button"
                                class="btn btn-primary mx-1">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
