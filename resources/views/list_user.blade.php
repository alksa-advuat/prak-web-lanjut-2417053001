@extends('layouts.app')

@section('content')
<h1 class="mb-4">Daftar User</h1>

<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->nim }}</td>
                <td>{{ $user->nama_kelas }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection