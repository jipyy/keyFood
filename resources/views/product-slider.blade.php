@extends('layouts.main')
@section('container')
    <section id="home">
        <header>
            <div class="title">PRODUCT LIST</div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                </svg>
                <span>0</span>
            </div>
        </header>
        <div class="grid-container">
            @foreach ($products as $product)
                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset($product->photo) }}" alt="{{ $product->name }}">
                    <div class="p-3 flex flex-col gap-2">
                        <div class="flex items-center gap-1">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        <h2 class="product-title" title="{{ $product->name }}">{{ $product->name }}</h2>
                        <div class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        <div class="mt-3 flex gap-1 isi">
                            <button class="button-primary">add to cart</button>
                            <button class="button-icon small-button">
                                <img class="icon-small" src="img/love.svg" alt="add to wishlist">
                            </button>
                            <button class="button-icon small-button">
                                <img class="icon-small" src="img/eye.svg" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
