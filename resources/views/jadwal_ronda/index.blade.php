@extends('layouts.app')

@section('content')
<a href="{{ route('jadwal-ronda.create') }}" class="btn btn-danger mb-3">
    + Tambah Jadwal
</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
<tr>
    <th>Hari</th>
    <th>Tanggal</th>
    <th>RT</th>
    <th>Petugas</th>
    <th>Aksi</th>
</tr>

@foreach($data as $row)
<tr>
    <td>{{ $row->hari }}</td>
    <td>{{ $row->tanggal }}</td>
    <td>{{ $row->rt }}</td>
    <td>{{ $row->petugas }}</td>
    <td>
        <a href="{{ route('jadwal-ronda.edit',$row->id) }}" class="btn btn-warning btn-sm">Edit</a>
        <form action="{{ route('jadwal-ronda.destroy',$row->id) }}"
              method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm"
                onclick="return confirm('Hapus data?')">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</table>
@endsection
