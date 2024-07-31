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
                <div class="edit-button-container">
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            edit toko
                        </span>
                    </button>
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
