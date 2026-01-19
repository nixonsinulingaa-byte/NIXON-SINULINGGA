@extends('layouts.siskamling')

@section('content')
<h3 class="mb-4 text-center">Selamat Datang di Sistem Keamanan Lingkungan</h3>
<p class="text-center text-muted">Monitoring ronda keamanan warga</p>

<div class="row g-3 my-4">
    <div class="col-md-4">
        <div class="card bg-primary text-white shadow">
            <div class="card-body">
                <h6>Jadwal Ronda</h6>
                <h5>Malam Ini: RT 03</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white shadow">
            <div class="card-body">
                <h6>Laporan</h6>
                <h5>3 Laporan Baru</h5>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-warning text-white shadow">
            <div class="card-body">
                <h6>Anggota</h6>
                <h5>25 Warga</h5>
            </div>
        </div>
    </div>
</div>
@endsection
