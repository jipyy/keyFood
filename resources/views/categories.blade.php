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
                <a href="#" class="showall active"><span>Semua</span></a>
            </div>
            <!--box-container---------->
            <div class="category-container">
                @foreach ($categories as $category)
                    <!--box---------------->
                    <a href="#" class="category-box" data-category="{{ $category->name }}">
                        <img alt="Product" src="{{ asset($category->icon) }}">
                        <span>{{ $category->name }}</span>
                    </a>
                @endforeach
            </div>
        </section>
        
        <section id="popular-bundle-pack">
            <!--heading-------------->
            <div class="product-heading">
                <h3>Daftar Produk</h3>
            </div>
            <!--box-container------>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="product-box" data-category="{{ $product->category->name }}">
                        <img alt="{{ $product->name }}" src="{{ asset($product->photo) }}">
                        <strong>{{ $product->name }}</strong>
                        <span class="quantity">{{ $product->quantity }}</span>
                        <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="javascript:void(0)" data-product-id="{{ $product->id }}" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Tambah Ke Keranjang
                        </a>
                        <a href="#" class="view-btn">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                @endforeach
            </div>

            @include('partials.cart')
            <div class="pagination">
                {{ $products->links() }}
            </div>
        </section>
    @endsection
