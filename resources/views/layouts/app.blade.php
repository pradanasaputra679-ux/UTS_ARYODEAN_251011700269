<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Katalog produk handmade karya perajin lokal Indonesia.">
    <title>@yield('title', 'Ruang Rupa — Katalog Handmade')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet"
      href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
    <div class="container py-2">
        <a class="navbar-brand brand-mark" href="{{ route('home') }}"><span class="brand-icon">r.</span> ruangrupa<span class="brand-dot">.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Buka navigasi"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('handmades.*') ? 'active' : '' }}" href="{{ route('handmades.index') }}">Koleksi</a></li>
                <li class="nav-item"><a class="btn btn-dark rounded-pill px-4 ms-lg-2" href="{{ route('handmades.index') }}">Jelajahi Produk <span aria-hidden="true">↗</span></a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="site-footer mt-5">
    <div class="container py-4">
        <div class="row align-items-center gy-3">
            <div class="col-md-6">
                <a class="navbar-brand brand-mark text-white" href="{{ route('home') }}"><span class="brand-icon">r.</span> ruangrupa<span class="brand-dot">.</span></a>
                <p class="footer-muted mb-0 mt-2">Karya kecil, cerita besar. Dukung tangan-tangan kreatif lokal.</p>
            </div>
            <div class="col-md-6 text-md-end footer-muted">
                <div>Proyek UTS Rekayasa Web · Laravel 13 & Bootstrap</div>
                <div class="mt-1">Aryo Dean Pradana · 251011700269</div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
