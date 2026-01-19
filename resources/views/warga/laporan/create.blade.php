@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Buat Laporan Kejadian</h3>

    <div class="card shadow-sm">
        <div class="card-body">

            {{-- ERROR VALIDASI --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('warga.laporan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- JUDUL --}}
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Laporan</label>
                    <input type="text" id="judul" name="judul"
                        class="form-control"
                        value="{{ old('judul') }}"
                        required>
                </div>

                {{-- DESKRIPSI --}}
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Kejadian</label>
                    <textarea id="deskripsi" name="deskripsi"
                        class="form-control"
                        rows="4"
                        required>{{ old('deskripsi') }}</textarea>
                </div>

                {{-- TANGGAL --}}
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Kejadian</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="form-control"
                        value="{{ old('tanggal') }}"
                        required>
                </div>

                {{-- FOTO --}}
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Bukti (Opsional)</label>
                    <input type="file" id="foto" name="foto"
                        class="form-control"
                        accept="image/*">
                </div>

                {{-- BUTTON --}}
                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('warga.dashboard') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>
                    <button type="submit"
                        class="btn btn-primary">
                        Kirim Laporan
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

