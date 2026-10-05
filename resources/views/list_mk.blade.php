@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Daftar Mata Kuliah</h1>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary">
            + Tambah Mata Kuliah
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th style="width: 60px;" class="text-center">No</th>
                    <th style="width: 150px;">ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th style="width: 100px;" class="text-center">SKS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td title="{{ $mk->id }}">{{ Str::limit($mk->id, 8, '...') }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td class="text-center">{{ $mk->sks }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">Belum ada data mata kuliah.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection