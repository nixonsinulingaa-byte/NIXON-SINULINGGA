<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISKAMLING - Sistem Informasi Post Ronda</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content-wrapper {
            flex: 1;
        }
        .hero-section {
            background-color: #f8f9fa; /* light gray */
            padding: 80px 0;
        }
        .feature-card {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            padding: 24px;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            transition: all 0.2s ease-in-out;
        }
        .feature-card:hover {
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">🛡️ SISKAMLING</a>
        <div class="d-flex">
            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-light me-2">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-sm btn-outline-light me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-sm btn-light">Register</a>
            @endauth
        </div>
    </div>
</nav>

<div class="content-wrapper">
    <!-- HERO -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="display-4 fw-bold text-dark mb-4">
                        Sistem Informasi Post Ronda
                    </h2>
                    <p class="lead text-secondary mb-4">
                        SISKAMLING adalah aplikasi berbasis web yang digunakan untuk memudahkan
                        petugas post ronda masyarakat melaporkan secara online, cepat, dan transparan.
                    </p>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        @auth
                            <a href="{{ route('dashboard') }}" class="btn btn-danger btn-lg px-4 me-md-2">
                                Menuju Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-danger btn-lg px-4 me-md-2">
                                Ajukan Pelaporan
                            </a>
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">
                                Daftar Akun
                            </a>
                        @endauth
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    {{-- ILUSTRASI --}}
                    {{-- Tambahkan ilustrasi di sini jika ada --}}
                </div>
            </div>
        </div>
    </section>

    <!-- FITUR -->
    <section class="py-5 bg-white">
        <div class="container text-center">
            <h3 class="display-6 fw-bold mb-3">Fitur Utama SISKAMLING</h3>
            <p class="text-secondary mb-5">
                sistem jadwal post Ronda masyarakat berbasis digital
            </p>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- CARD 1 -->
                <div class="col">
                    <div class="feature-card h-100">
                        <h4 class="fw-bold mb-2">Pelaporan Online</h4>
                        <p class="text-secondary">
                            Masyarakat dapat mengajukan pelaporan kapan saja secara online.
                        </p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col">
                    <div class="feature-card h-100">
                        <h4 class="fw-bold mb-2">Monitoring Status</h4>
                        <p class="text-secondary">
                            Pantau status pelaporan secara real-time.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col">
                    <div class="feature-card h-100">
                        <h4 class="fw-bold mb-2">Transparan</h4>
                        <p class="text-secondary">
                            Proses post ronda tercatat dan terdokumentasi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-auto">
    <p class="mb-0">&copy; {{ date('Y') }} SISKAMLING - Sistem Informasi Post Ronda</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>