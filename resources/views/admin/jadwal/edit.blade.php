@extends('layouts.admin')

@section('content')
<h3>Edit Jadwal Ronda</h3>

<form method="POST" action="{{ route('admin.jadwal.update', $jadwal->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Hari</label>
        <input type="text" name="hari" value="{{ $jadwal->hari }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>RT</label>
        <input type="text" name="rt" value="{{ $jadwal->rt }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Petugas</label>
        <input type="text" name="petugas" value="{{ $jadwal->petugas }}" class="form-control">
    </div>

    <button class="btn btn-danger">Update</button>
    <a href="{{ route('admin.jadwal.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
