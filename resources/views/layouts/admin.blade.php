<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SISKAMLING - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background:#f4f6f9; }
        .sidebar {
            width: 240px;
            min-height: 100vh;
            background: #dc3545;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 12px 16px;
            display: block;
        }
        .sidebar a:hover,
        .sidebar .active {
            background: rgba(255,255,255,.2);
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <h5 class="text-white text-center py-3">🛡️ SISKAMLING</h5>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.jadwal.index') }}">Jadwal Ronda</a>
        <a href="{{ route('admin.laporan.index') }}">Laporan</a>
        <a href="{{ route('admin.anggota.index') }}">Anggota</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-light btn-sm m-3 w-75">Logout</button>
        </form>
    </div>

    <!-- CONTENT -->
    <div class="flex-fill p-4">
        @yield('content')
    </div>
</div>

</body>
</html>
