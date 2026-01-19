<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SISKAMLING</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="{{ route('warga.dashboard') }}">🛡️ SISKAMLING</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <span class="nav-link text-white">
                    {{ auth()->user()->name ?? '' }}
                </span>
            </li>
            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-light ms-2">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-4">
    @yield('content')
</div>

</body>
</html>
