@extends('layouts.app')

@section('title', $handmade->name.' — Ruang Rupa')

@section('content')
<section class="detail-section"><div class="container">
    <nav aria-label="breadcrumb"><ol class="breadcrumb small"><li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li><li class="breadcrumb-item"><a href="{{ route('handmades.index') }}">Koleksi</a></li><li class="breadcrumb-item active" aria-current="page">{{ $handmade->name }}</li></ol></nav>
    <div class="row g-5 align-items-start mt-2">
        <div class="col-lg-6">
<div class="col-lg-6">
    <div class="detail-image">
        <img
            src="{{ $handmade->image }}"
            alt="{{ $handmade->name }}"
            style="width: 100%; height: auto; display: block;"
            onerror="this.onerror=null;this.src='https://placehold.co/600x400?text=Produk+Handmade';"
        >
        <span class="image-tag">KARYA PILIHAN</span>
    </div>
</div>
<img
    src="{{ $handmade->image }}"
    alt="{{ $handmade->name }}"
    class="card-img-top"
    style="width: 100%; height: 220px; object-fit: cover;"
    onerror="this.onerror=null;this.src='https://placehold.co/600x400?text=Produk+Handmade';"
><span class="image-tag">KARYA PILIHAN</span></div></div>
        <div class="col-lg-6 detail-content"><div class="eyebrow">{{ strtoupper($handmade->material) }} · HANDMADE</div><h1 class="detail-title mt-3">{{ $handmade->name }}</h1><p class="detail-artisan">Dibuat dengan teliti oleh <strong>{{ $handmade->artisan }}</strong></p><div class="detail-price mt-4">Rp {{ number_format($handmade->price, 0, ',', '.') }}</div><div class="detail-rule my-4"></div><h2 class="detail-label">Tentang karya ini</h2><p class="detail-description">{{ $handmade->description }}</p><div class="detail-facts mt-4"><div><span>Material</span><strong>{{ $handmade->material }}</strong></div><div><span>Pembuat</span><strong>{{ $handmade->artisan }}</strong></div><div><span>Kategori</span><strong>Produk handmade</strong></div></div><a href="{{ route('handmades.index') }}" class="btn btn-dark btn-lg rounded-pill px-4 mt-4">← Kembali ke koleksi</a><p class="small muted mt-3 mb-0">Halaman katalog demonstrasi untuk proyek UTS.</p></div>
    </div>
</div></section>
@if($related->isNotEmpty())
<section class="section-space pt-2"><div class="container"><div class="section-heading"><div class="eyebrow">MUNGKIN KAMU SUKA</div><h2 class="section-title mt-2">Karya serupa.</h2></div><div class="row g-4 mt-2">@foreach($related as $product)<div class="col-sm-6 col-lg-4"><article class="product-card h-100"><a href="{{ route('handmades.show', $product) }}" class="product-image-link"><div class="product-image"><img src="{{ asset('assets/images/'.$product->image) }}" alt="{{ $product->name }}"></div></a><div class="product-info"><div class="product-meta">{{ $product->material }}</div><h3><a href="{{ route('handmades.show', $product) }}">{{ $product->name }}</a></h3><strong class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</strong></div></article></div>@endforeach</div></div></section>
@endif
@endsection
