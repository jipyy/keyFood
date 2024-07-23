@extends('layouts.main')
@section('container')
    <section id="home">
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
