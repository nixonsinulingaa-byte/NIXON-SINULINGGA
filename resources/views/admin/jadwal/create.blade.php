@extends('layouts.admin')

@section('content')
<h4>Tambah Jadwal Ronda</h4>

<form action="{{ route('admin.jadwal.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Hari</label>
        <input type="text" name="hari" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>RT</label>
        <input type="text" name="rt" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Petugas</label>
        <input type="text" name="petugas" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection
