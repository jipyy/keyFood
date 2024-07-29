@extends('layouts.main')
@section('container')
    <section id="home">
        <!-- Popular Bundle Pack Section -->
        <section id="popular-bundle-pack">
            <div class="product-heading">
                <h3>Popular Bundle Pack</h3>
            </div>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="product-box">
                        <img alt="{{ $product->name }}" src="{{ asset($product->photo) }}">
                        <strong>{{ $product->name }}</strong>
                        <span class="quantity">Lemone, Tamato, Patato, +2</span>
                        <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="#" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add Cart
                        </a>
                        <a href="#" class="like-btn">
                            <i class="far fa-heart"></i>
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
