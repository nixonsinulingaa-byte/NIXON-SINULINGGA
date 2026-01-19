@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Anggota</h4>

    <form action="{{ route('admin.anggota.store') }}" method="POST">
        @csrf

        <div class="mb-2">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="mb-2">
            <label>RT</label>
            <input type="text" name="rt" class="form-control">
        </div>

        <div class="mb-3">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.anggota.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
