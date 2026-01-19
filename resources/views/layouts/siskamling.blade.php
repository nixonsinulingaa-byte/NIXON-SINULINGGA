<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SISKAMLING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">🛡️ SISKAMLING</a>

        @auth
        <ul class="navbar-nav ms-auto">
            @if(auth()->user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/admin">Dashboard Admin</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard/warga">Dashboard</a>
                </li>
            @endif

            <li class="nav-item ms-3">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-sm btn-light">Logout</button>
                </form>
            </li>
        </ul>
        @endauth
    </div>
</nav>

<div class="container my-4">
    @yield('content')
</div>

</body>
</html>
