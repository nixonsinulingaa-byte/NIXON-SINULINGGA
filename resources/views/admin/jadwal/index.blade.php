@extends('layouts.admin')

@section('content')
<h3>Jadwal Ronda</h3>

<a href="{{ route('admin.jadwal.create') }}" class="btn btn-danger mb-3">
    + Tambah Jadwal
</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Hari</th>
        <th>RT</th>
        <th>Petugas</th>
        <th>Aksi</th>
    </tr>

    @foreach($jadwal as $item)
    <tr>
        <td>{{ $item->hari }}</td>
        <td>{{ $item->rt }}</td>
        <td>{{ $item->petugas }}</td>
        <td>
            <a href="{{ route('admin.jadwal.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

            <form action="{{ route('admin.jadwal.destroy', $item->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus jadwal?')" class="btn btn-sm btn-danger">
                    Hapus
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
