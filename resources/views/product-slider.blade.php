@extends('layouts.main')
@section('container')
    <section id="page">
        <header>
            <div class="title">PRODUCT LIST</div>
            <div class="icon-cart">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1"/>
                </svg>
                <span>0</span>
            </div>
        </header>
        <div>
            {{-- header --}}
            {{-- crousel --}}
            <div class="carousel">
                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset('./img/headphone.jpg') }}" alt="headphone">
                    <div class="p-5 flex flex-col gap-3">
                        {{-- badge --}}
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        {{-- product title --}}
                        <h2 class="product-title" title="best headphone">headphone</h2>
                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold">
                                Rp 100.000.000
                            </span>

                        </div>
                        {{-- product rating --}}

                        {{-- product action button --}}
                        <div class="mt-5 flex gap-2">
                            <button class="button-primary">
                                add to cart
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/love.svg') }}" alt="add to wishlist">
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/eye.svg') }}" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset('./img/shoes.jpg') }}" alt="shoes">
                    <div class="p-5 flex flex-col gap-3">
                        {{-- badge --}}
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        {{-- product title --}}
                        <h2 class="product-title" title="best shoes">best shoes</h2>
                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold">
                                Rp 100.000.000
                            </span>

                        </div>
                        {{-- product rating --}}

                        {{-- product action button --}}
                        <div class="mt-5 flex gap-2">
                            <button class="button-primary" id="add-to-cart">
                                add to cart
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/love.svg') }}" alt="add to wishlist">
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/eye.svg') }}" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset('./img/shoes.jpg') }}" alt="shoes">
                    <div class="p-5 flex flex-col gap-3">
                        {{-- badge --}}
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        {{-- product title --}}
                        <h2 class="product-title" title="best shoes">best shoes</h2>
                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold">
                                Rp 100.000.000
                            </span>

                        </div>
                        {{-- product rating --}}

                        {{-- product action button --}}
                        <div class="mt-5 flex gap-2">
                            <button class="button-primary" id="add-to-cart">
                                add to cart
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/love.svg') }}" alt="add to wishlist">
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/eye.svg') }}" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset('./img/shoes.jpg') }}" alt="shoes">
                    <div class="p-5 flex flex-col gap-3">
                        {{-- badge --}}
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        {{-- product title --}}
                        <h2 class="product-title" title="best shoes">best shoes</h2>
                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold">
                                Rp 100.000.000
                            </span>

                        </div>
                        {{-- product rating --}}

                        {{-- product action button --}}
                        <div class="mt-5 flex gap-2">
                            <button class="button-primary" id="add-to-cart">
                                add to cart
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/love.svg') }}" alt="add to wishlist">
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/eye.svg') }}" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset('./img/shoes.jpg') }}" alt="shoes">
                    <div class="p-5 flex flex-col gap-3">
                        {{-- badge --}}
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        {{-- product title --}}
                        <h2 class="product-title" title="best shoes">best shoes</h2>
                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold">
                                Rp 100.000.000
                            </span>

                        </div>
                        {{-- product rating --}}

                        {{-- product action button --}}
                        <div class="mt-5 flex gap-2">
                            <button class="button-primary" id="add-to-cart">
                                add to cart
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/love.svg') }}" alt="add to wishlist">
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/eye.svg') }}" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="w-full h-full object-cover" src="{{ asset('./img/camera.jpg') }}" alt="camera">
                    <div class="p-5 flex flex-col gap-3">
                        {{-- badge --}}
                        <div class="flex items-center gap-2">
                            <span class="badge">stock ready</span>
                            <span class="badge">official store</span>
                        </div>
                        {{-- product title --}}
                        <h2 class="product-title" title="best camera">best camera</h2>
                        {{-- product price --}}
                        <div>
                            <span class="text-xl font-bold">
                                Rp 100.000.000
                            </span>

                        </div>
                        {{-- product rating --}}

                        {{-- product action button --}}
                        <div class="mt-5 flex gap-2">
                            <button class="button-primary" id="add-to-cart">
                                add to cart
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/love.svg') }}" alt="add to wishlist">
                            </button>
                            <button class="button-icon">
                                <img class="opacity-50" src="{{ asset('./img/eye.svg') }}" alt="view details">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
