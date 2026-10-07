@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="mb-4">Edit User</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama"
                       value="{{ old('nama', $user->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="npm" class="form-label">NPM:</label>
                <input type="text" class="form-control" id="npm" name="npm"
                       value="{{ old('npm', $user->nim) }}" required>
            </div>

            <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas:</label>
                <select name="kelas_id" id="kelas_id" class="form-select" required>
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}"
                            {{ old('kelas_id', $user->kelas_id) == $kelasItem->id ? 'selected' : '' }}>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ url('/user') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection