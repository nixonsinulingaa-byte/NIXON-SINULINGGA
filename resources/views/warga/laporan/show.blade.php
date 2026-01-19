@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="mb-0">Detail Laporan</h3>
        <a href="{{ route('warga.dashboard') }}" class="btn btn-secondary">
            &laquo; Kembali ke Dashboard
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                {{-- Kolom Kiri: Detail Teks --}}
                <div class="col-md-7">
                    <h4 class="card-title mb-3">{{ $laporan->judul }}</h4>

                    <dl class="row">
                        <dt class="col-sm-4">Tanggal Kejadian</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($laporan->tanggal)->format('d F Y') }}</dd>

                        <dt class="col-sm-4">Status</dt>
                        <dd class="col-sm-8">
                            <span class="badge bg-primary">{{ Str::title($laporan->status) }}</span>
                        </dd>
                    </dl>

                    <h5 class="mt-4">Deskripsi</h5>
                    <p>{!! nl2br(e($laporan->deskripsi)) !!}</p>
                </div>

                {{-- Kolom Kanan: Foto --}}
                <div class="col-md-5">
                    <h5>Foto Bukti</h5>
                    @if ($laporan->foto)
                        <img src="{{ asset('storage/' . $laporan->foto) }}"
                             alt="Foto Laporan"
                             class="img-fluid rounded shadow-sm">
                    @else
                        <div class="text-muted">
                            Tidak ada foto yang dilampirkan.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
