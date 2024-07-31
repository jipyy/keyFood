@extends('layouts.main')
@section('container')
    <section id="home">
        <!-- Popular Bundle Pack Section -->
        <section id="popular-bundle-pack">
            <div class="product-heading">
                <h3>Products List</h3>
            </div>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="product-box">
                        <span hidden>{{ $product->id }}</span>
                        <img alt="{{ $product->name }}" src="{{ asset($product->photo) }}">
                        <strong>{{ $product->name }}</strong>
                        <span class="quantity"></span>
                        <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="#" class="cart-btn" data-product-id="{{ $product->id }}">
                            <i class="fas fa-shopping-bag"></i> Add Cart
                        </a>
                    </div>
                @endforeach
            </div>

        @include('partials.cart')
            <div class="pagination">
                {{-- Menampilkan link pagination --}}
                {{ $products->links() }}
            </div>
        </section>
    </section>
@endsection
