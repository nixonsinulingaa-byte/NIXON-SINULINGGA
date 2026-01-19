@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Dashboard Warga</h3>
        <a href="{{ route('warga.laporan.create') }}" class="btn btn-primary">
            + Buat Laporan
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h6>Laporan Saya</h6>
                    <h4>{{ $laporans->count() }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h5>Daftar Laporan Anda</h5>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($laporans as $laporan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('warga.laporan.show', $laporan) }}">{{ $laporan->judul }}</a></td>
                                <td>{{ \Carbon\Carbon::parse($laporan->tanggal)->format('d F Y') }}</td>
                                <td>
                                    <span class="badge bg-primary">{{ Str::title($laporan->status) }}</span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">
                                    Anda belum memiliki laporan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
