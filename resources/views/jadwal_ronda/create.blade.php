@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('jadwal-ronda.store') }}">
@csrf

<input name="hari" class="form-control mb-2" placeholder="Hari">
<input type="date" name="tanggal" class="form-control mb-2">
<input name="rt" class="form-control mb-2" placeholder="RT">
<input name="petugas" class="form-control mb-2" placeholder="Petugas">

<button class="btn btn-danger">Simpan</button>
</form>
@endsection
