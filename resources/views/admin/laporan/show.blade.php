@extends('layouts.admin')

@section('content')
    <h3 class="mb-3">Detail Laporan</h3>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        {{-- Kolom Kiri: Detail Laporan --}}
        <div class="col-lg-7">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $laporan->judul }}</h4>

                    <dl class="row">
                        <dt class="col-sm-4">Pelapor</dt>
                        <dd class="col-sm-8">{{ $pelapor->name ?? 'User Dihapus' }}</dd>

                        <dt class="col-sm-4">Email Pelapor</dt>
                        <dd class="col-sm-8">{{ $pelapor->email ?? '-' }}</dd>

                        <dt class="col-sm-4">Tanggal Kejadian</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($laporan->tanggal)->format('d F Y') }}</dd>
                    </dl>

                    <h5 class="mt-4">Deskripsi</h5>
                    <p>{!! nl2br(e($laporan->deskripsi)) !!}</p>
                </div>
            </div>

            <div class="card shadow-sm mt-3">
                <div class="card-body">
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

        {{-- Kolom Kanan: Update Status --}}
        <div class="col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Update Status Laporan</h5>
                    <form action="{{ route('admin.laporan.update', $laporan) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="baru" @selected($laporan->status === 'baru')>
                                    Baru
                                </option>
                                <option value="diproses" @selected($laporan->status === 'diproses')>
                                    Diproses
                                </option>
                                <option value="selesai" @selected($laporan->status === 'selesai')>
                                    Selesai
                                </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Update Status
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('admin.laporan.index') }}" class="btn btn-secondary">
            &laquo; Kembali ke Daftar Laporan
        </a>
    </div>
@endsection
