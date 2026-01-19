@extends('layouts.admin')

@section('content')
<h2 class="mb-1">Dashboard Admin</h2>
<p class="text-muted mb-4">Kelola jadwal ronda, laporan, dan anggota</p>

<!-- STAT CARD -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card bg-primary card-stat shadow">
            <div class="card-body">
                <h6>Total Anggota</h6>
                <h3>25</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success card-stat shadow">
            <div class="card-body">
                <h6>Jadwal Ronda</h6>
                <h3>7 Hari</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-warning card-stat shadow">
            <div class="card-body">
                <h6>Laporan Masuk</h6>
                <h3>3</h3>
            </div>
        </div>
    </div>
</div>

<!-- TABEL -->
<div class="row">
    <div class="col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header fw-bold">Jadwal Ronda</div>
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <tr>
                        <th>Hari</th>
                        <th>RT</th>
                        <th>Petugas</th>
                    </tr>
                    <tr>
                        <td>Senin</td>
                        <td>RT 01</td>
                        <td>Andi, Budi</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>RT 02</td>
                        <td>Dedi, Eko</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card shadow">
            <div class="card-header fw-bold">Laporan Terbaru</div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">🚨 Pencurian Helm</li>
                    <li class="list-group-item">👀 Orang Asing</li>
                    <li class="list-group-item">💡 Lampu Jalan Mati</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
