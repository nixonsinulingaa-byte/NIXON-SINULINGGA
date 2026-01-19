@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-3">Data Anggota</h4>

    <a href="{{ route('admin.anggota.create') }}" class="btn btn-primary mb-3">
        + Tambah Anggota
    </a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>RT</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($anggotas as $anggota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota->nama }}</td>
                    <td>{{ $anggota->rt }}</td>
                    <td>{{ $anggota->no_hp }}</td>
                    <td>
                        <a href="{{ route('admin.anggota.edit', $anggota->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('admin.anggota.destroy', $anggota->id) }}"
                              method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Data anggota belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
