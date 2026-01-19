@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('jadwal-ronda.update',$item->id) }}">
@csrf @method('PUT')

<input name="hari" value="{{ $item->hari }}" class="form-control mb-2">
<input type="date" name="tanggal" value="{{ $item->tanggal }}" class="form-control mb-2">
<input name="rt" value="{{ $item->rt }}" class="form-control mb-2">
<input name="petugas" value="{{ $item->petugas }}" class="form-control mb-2">

<button class="btn btn-warning">Update</button>
</form>
@endsection
