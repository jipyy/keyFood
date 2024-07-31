@extends('layouts.main')
@section('container')
    <section id="home">
        <div class="store-header">
            <div class="store-info">
                <img src="{{ asset('img/shoes.jpg') }}" alt="logo toko" class="store-logo">
                <div class="store-text">
                    <h1>nama toko anda</h1>
                    <h2>alamat toko</h2>
                </div>
            </div>
            <div class="store-description">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quasi maiores praesentium aliquam repellat
                    incidunt eveniet illo dolorum, vel optio officia libero, exercitationem amet dolorem accusantium beatae
                    consequuntur consequatur soluta?</p>
            </div>
        </div>
        <!-- produk produk -->
        <section id="popular-bundle-pack">
            <!--heading-------------->
            <div class="product-heading">
                <h3>Products List</h3>
            </div>
            <!--box-container------>
            <div class="product-container">
                <!--box---------->
                <div class="product-box">
                    <img alt="pack" src="{{ asset('img/pack1.png') }}">
                    <strong>Big Pack</strong>
                    <span class="quantity">Lemone, Tamato, Patato,+4</span>
                    <span class="price">9$</span>
                    <!--cart-btn------->
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Edit Product
                    </a>
                    <!--view-btn------->
                    <a href="#" class="view-btn">
                        <i class="far fa-eye"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="{{ asset('img/pack2.jpg') }}">
                    <strong>Large Pack</strong>
                    <span class="quantity">Lemone, Tamato, Patato,+2</span>
                    <span class="price">5$</span>
                    <!--cart-btn------->
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Edit Product
                    </a>
                    <!--view-btn------->
                    <a href="#" class="view-btn">
                        <i class="far fa-eye"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="{{ asset('img/pack3.png') }}">
                    <strong>Small Pack</strong>
                    <span class="quantity">Lemone, Tamato, Patato</span>
                    <span class="price">3$</span>
                    <!--cart-btn------->
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Edit Product
                    </a>
                    <!--view-btn------->
                    <a href="#" class="view-btn">
                        <i class="far fa-eye"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="pack" src="{{ asset('img/pack1.png') }}">
                    <strong>Big Pack</strong>
                    <span class="quantity">Lemone, Tamato, Patato,+4</span>
                    <span class="price">9$</span>
                    <!--cart-btn------->
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Edit Product
                    </a>
                    <!--view-btn------->
                    <a href="#" class="view-btn">
                        <i class="far fa-eye"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="{{ asset('img/pack2.jpg') }}">
                    <strong>Large Pack</strong>
                    <span class="quantity">Lemone, Tamato, Patato,+2</span>
                    <span class="price">5$</span>
                    <!--cart-btn------->
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Edit Product
                    </a>
                    <!--view-btn------->
                    <a href="#" class="view-btn">
                        <i class="far fa-eye"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="{{ asset('img/pack3.png') }}">
                    <strong>Small Pack</strong>
                    <span class="quantity">Lemone, Tamato, Patato</span>
                    <span class="price">3$</span>
                    <!--cart-btn------->
                    <a href="#" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Edit Product
                    </a>
                    <!--view-btn------->
                    <a href="#" class="view-btn">
                        <i class="far fa-eye"></i>
                    </a>
                </div>
            </div>
        </section>

    </section>
@endsection
