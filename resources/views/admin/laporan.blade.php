@extends('layouts.admin')

@section('content')
    <h3 class="mb-3">Manajemen Laporan Kejadian</h3>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Pelapor</th>
                        <th>Tanggal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($laporans as $laporan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $laporan->judul }}</td>
                            <td>{{ $laporan->user->name ?? 'User Dihapus' }}</td>
                            <td>{{ \Carbon\Carbon::parse($laporan->tanggal)->format('d F Y') }}</td>
                            <td>
                                <span class="badge bg-primary">{{ Str::title($laporan->status) }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.laporan.show', $laporan) }}" class="btn btn-sm btn-info">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">
                                Belum ada laporan yang masuk.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection