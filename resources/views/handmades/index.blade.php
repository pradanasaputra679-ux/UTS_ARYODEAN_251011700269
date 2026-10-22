@extends('layouts.app')

@section('title', 'Koleksi Handmade — Ruang Rupa')

@section('content')
<section class="page-banner"><div class="container"><div class="eyebrow">KURASI PRODUK LOKAL</div><h1 class="section-title mt-3">Semua <em>karya.</em></h1><p class="muted mb-0">Pilihan handmade yang punya karakter, dibuat oleh tangan-tangan kreatif.</p></div></section>
<section class="pb-5"><div class="container">
    <form class="filter-panel row g-3 align-items-end mb-4" method="GET" action="{{ route('handmades.index') }}">
        <div class="col-md-7"><label for="q" class="form-label small fw-semibold">Cari produk</label><input class="form-control form-control-lg" type="search" id="q" name="q" value="{{ request('q') }}" placeholder="Nama produk, perajin, atau material..."></div>
        <div class="col-md-3"><label for="material" class="form-label small fw-semibold">Material</label><select class="form-select form-select-lg" id="material" name="material"><option value="">Semua material</option>@foreach($materials as $material)<option value="{{ $material }}" @selected(request('material') === $material)>{{ $material }}</option>@endforeach</select></div>
        <div class="col-md-2 d-grid"><button class="btn btn-dark btn-lg rounded-pill" type="submit">Terapkan ↗</button></div>
    </form>
    <div class="d-flex justify-content-between align-items-center mb-3"><span class="muted small">Menampilkan {{ $handmades->firstItem() ?? 0 }}–{{ $handmades->lastItem() ?? 0 }} dari {{ $handmades->total() }} produk</span>@if(request()->hasAny(['q','material']))<a class="text-link small" href="{{ route('handmades.index') }}">Hapus filter ×</a>@endif</div>
    <div class="row g-4">
    @forelse($handmades as $product)
        <div class="col-sm-6 col-lg-4"><article class="product-card h-100"><a href="{{ route('handmades.show', $product) }}" class="product-image-link"><div class="product-image"><img src="{{ $product->image }}" alt="{{ $product->name }}"><span class="image-tag">HANDMADE</span></div></a><div class="product-info"><div class="product-meta">{{ $product->material }} <span>•</span> {{ $product->artisan }}</div><h3><a href="{{ route('handmades.show', $product) }}">{{ $product->name }}</a></h3><p class="product-description">{{ Str::limit($product->description, 92) }}</p><div class="d-flex justify-content-between align-items-center mt-3"><strong class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</strong><a class="round-arrow" href="{{ route('handmades.show', $product) }}" aria-label="Lihat {{ $product->name }}">↗</a></div></div></article></div>
    @empty
        <div class="col-12"><div class="empty-state"><span>⌕</span><h3>Produk tidak ditemukan</h3><p>Coba kata kunci atau material lainnya.</p><a href="{{ route('handmades.index') }}" class="btn btn-dark rounded-pill px-4">Lihat semua produk</a></div></div>
    @endforelse
    </div>
    <div class="mt-5">{{ $handmades->links() }}</div>
</div></section>
@endsection
