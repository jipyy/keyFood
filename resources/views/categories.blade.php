@extends('layouts.main')
@section('container')
    <section id="home">
        <section id="search-banner">
            <!--bg--------->
            <img alt="bg" class="bg-1" src="{{ asset('img/bg-1.png') }}">
            <img alt="bg-2" class="bg-2" src="{{ asset('img/topping.png') }}">
            <!--text------->
            <div class="search-banner-text">
                <h1>Pesan Makananmu Sekarang!</h1>
                <strong>#GratisOngkir</strong>
                <!--search-box------>
                <form action="" class="search-boxs">
                    <!--icon------>
                    <i class="fas fa-search"></i>
                    <!--input----->
                    <input type="text" class="search-inputs" placeholder="Cari makanan yang anda mau" name="search"
                        required>
                    <!--btn------->
                    <input type="submit" class="search-btns" value="Search">
                </form>
            </div>
        </section>
        <!--search-banner-end--------------->
        <!--==category=========================================-->
        <section id="category">
            <!--heading---------------->
            <div class="category-heading">
                <h2>Kategori</h2>
                <a href="#" class="showall"><span>Semua</span></a>
            </div>
            <!--box-container---------->
            <div class="category-container">
                <!--box---------------->
                <a href="#" class="category-box" data-category="Makanan Manis">
                    <img alt="Product" src="{{ asset('img/icons/cookies.png') }}">
                    <span>Makanan Manis</span>
                </a>
                <!--box---------------->
                <a href="#" class="category-box" data-category="Minuman">
                    <img alt="Product" src="{{ asset('img/icons/drink.png') }}">
                    <span>Minuman</span>
                </a>
                <!--box---------------->
                <a href="#" class="category-box" data-category="Sayur-sayuran">
                    <img alt="Product" src="{{ asset('img/icons/salad.png') }}">
                    <span>Sayur-sayuran</span>
                </a>
                <!--box---------------->
                <a href="#" class="category-box" data-category="Makanan Asin">
                    <img alt="Product" src="{{ asset('img/icons/salty-food.png') }}">
                    <span>Makanan Asin</span>
                </a>
                <!--box---------------->
                <a href="#" class="category-box" data-category="Buah-buahan">
                    <img alt="Product" src="{{ asset('img/icons/fruit.png') }}">
                    <span>Buah-buahan</span>
                </a>
            </div>

        </section>
        <section id="popular-bundle-pack">
            <!--heading-------------->
            <div class="product-heading">
                <h3>Products List</h3>
            </div>
            <!--box-container------>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="product-box">
                        <img alt="{{ $product->name }}" src="{{ asset($product->photo) }}">
                        <strong>{{ $product->name }}</strong>
                        <span class="quantity">{{ $product->quantity }}</span>
                        <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="#" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add Cart
                        </a>
                        <a href="#" class="view-btn">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            {{ $products->links() }}
        </section>
    @endsection
