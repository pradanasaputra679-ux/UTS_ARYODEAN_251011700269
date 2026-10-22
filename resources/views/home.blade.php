@extends('layouts.app')

@section('title', 'Home — Ruang Rupa Handmade')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 py-lg-4">
                <div class="eyebrow"><span class="eyebrow-line"></span> DIBUAT DENGAN HATI, DIPILIH DENGAN ARTI</div>
                <h1 class="hero-title mt-4">Temukan keindahan dalam <em>karya buatan tangan.</em></h1>
                <p class="hero-copy mt-4">Setiap karya punya cerita. Jelajahi koleksi produk handmade dari perajin lokal yang membawa kehangatan, karakter, dan makna ke keseharianmu.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('handmades.index') }}" class="btn btn-dark btn-lg rounded-pill px-4">Jelajahi Koleksi <span class="ms-2">↗</span></a>
                    <a href="#cerita" class="btn btn-outline-dark btn-lg rounded-pill px-4">Cerita Kami</a>
                </div>
                <div class="hero-stats mt-5">
                    <div><strong>{{ $productCount }}+</strong><span>Karya pilihan</span></div>
                    <div class="stat-divider"></div>
                    <div><strong>100%</strong><span>Sentuhan manusia</span></div>
                    <div class="stat-divider"></div>
                    <div><strong>Lokal</strong><span>Karya Indonesia</span></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-art-wrap">
                    <div class="hero-art-main"><img src="{{ asset('assets/images/vas-keramik.svg') }}" alt="Ilustrasi vas keramik handmade"></div>
                    <div class="hero-art-small"><img src="{{ asset('assets/images/tas-anyam.svg') }}" alt="Ilustrasi tas anyam handmade"></div>
                    <div class="floating-note"><span class="note-star">✳</span><div><strong>Made by hand</strong><small>Loved for a lifetime</small></div></div>
                    <div class="hero-art-label">OBJEK DENGAN JIWA <span>— 01 / 09</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="trust-strip">
    <div class="container">
        <div class="row text-center g-3">
            <div class="col-6 col-md-3"><span class="trust-symbol">✳</span> Dibuat secara handmade</div>
            <div class="col-6 col-md-3"><span class="trust-symbol">♡</span> Mendukung perajin lokal</div>
            <div class="col-6 col-md-3"><span class="trust-symbol">♧</span> Material penuh karakter</div>
            <div class="col-6 col-md-3"><span class="trust-symbol">✦</span> Unik di setiap karya</div>
        </div>
    </div>
</section>

<section class="section-space" id="koleksi">
    <div class="container">
        <div class="section-heading d-flex justify-content-between align-items-end flex-wrap gap-3">
            <div><div class="eyebrow">PILIHAN KURASI</div><h2 class="section-title mt-2">Karya yang punya <em>cerita.</em></h2><p class="muted mb-0">Temukan benda favorit yang dibuat dengan sepenuh hati.</p></div>
            <a class="text-link" href="{{ route('handmades.index') }}">Lihat semua koleksi <span>↗</span></a>
        </div>
        <div class="row g-4 mt-2">
            @forelse($featured as $product)
            <div class="col-sm-6 col-lg-4">
                <article class="product-card h-100">
                    <a href="{{ route('handmades.show', $product) }}" class="product-image-link">
<div class="product-image">
    <img
        src="{{ $product->image }}"
        alt="{{ $product->name }}"
        loading="lazy"
        onerror="this.onerror=null;this.src='https://placehold.co/600x400/F2E9DC/594A3C?text=Produk+Handmade';"
    >
    <span class="image-tag">HANDMADE</span>
</div>
</a>
                    <div class="product-info"><div class="product-meta">{{ $product->material }} <span>•</span> {{ $product->artisan }}</div><h3><a href="{{ route('handmades.show', $product) }}">{{ $product->name }}</a></h3><div class="d-flex justify-content-between align-items-center mt-3"><strong class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</strong><a class="round-arrow" href="{{ route('handmades.show', $product) }}" aria-label="Lihat {{ $product->name }}">↗</a></div></div>
                </article>
            </div>
            @empty
            <div class="col-12"><div class="alert alert-light">Produk belum tersedia. Jalankan seeder untuk mengisi koleksi.</div></div>
            @endforelse
        </div>
    </div>
</section>

<section class="story-section" id="cerita">
    <div class="container"><div class="row align-items-center g-5">
        <div class="col-lg-5"><div class="story-art"><img src="{{ asset('assets/images/keranjang-rami.svg') }}" alt="Ilustrasi keranjang serat alam"><span class="story-stamp">LOCAL<br>IS<br>LOVELY</span></div></div>
        <div class="col-lg-7"><div class="eyebrow">LEBIH DARI SEKADAR BENDA</div><h2 class="section-title mt-3">Ada tangan, waktu, dan <em>cerita</em> di baliknya.</h2><p class="story-copy mt-4">Ruang Rupa merayakan karya handmade yang dibuat dengan kesabaran dan ketelitian. Kami percaya benda yang bermakna tidak harus sempurna seragam—justru keunikan kecilnya yang membuatnya istimewa.</p><a href="{{ route('handmades.index') }}" class="btn btn-dark rounded-pill px-4 mt-2">Temukan karya favoritmu ↗</a></div>
    </div></div>
</section>
@endsection
