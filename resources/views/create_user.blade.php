@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="mb-4">Tambah User</h1>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm">
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection