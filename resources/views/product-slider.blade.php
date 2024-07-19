@extends('layouts.main')
@section('container')
<div>
    <div class="ecommerce-header flex items-center p-5 bg-white shadow">
        <img src="{{ asset('./img/logo-store.jpg') }}" alt="Store Logo" class="h-10 w-10 mr-3 rounded-full">
        <h1 class="text-2xl font-bold">Nama Toko Anda</h1>
    </div>
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                <h2 class="product-title text-blue-500" title="best camera">best camera</h2>
                {{-- product price --}}
                <div>
                    <span class="text-xl font-bold">
                        Rp 100.000.000
                    </span>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-gray-500/80 hover:bg-gray-500/90">
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
    <div class="ecommerce-header flex items-center p-5 bg-white shadow">
        <img src="{{ asset('./img/logo-store.jpg') }}" alt="Store Logo" class="h-10 w-10 mr-3 rounded-full">
        <h1 class="text-2xl font-bold">Nama Toko Anda</h1>
    </div>
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-red-500/80 hover:bg-red-500/90">
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
                <h2 class="product-title text-blue-500" title="best camera">best camera</h2>
                {{-- product price --}}
                <div>
                    <span class="text-xl font-bold">
                        Rp 100.000.000
                    </span>
                    <div class="flex items-center gap-2 mt-1">
                        <span class="text-sm line-through opacity-50">
                            Rp 500.000
                        </span>
                        <span class="discount-percent">
                            save 20%
                        </span>
                    </div>
                </div>
                {{-- product rating --}}
                <span class="flex items-center mt-1">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star.svg') }}">
                    <img src="{{ asset('./img/star-half-fill.svg') }}">
                    <img src="{{ asset('./img/star-no-fill.svg') }}">
                    <span class="text-xs ml-2 text-gray-500">
                        20k reviews
                    </span>
                </span>
                {{-- product action button --}}
                <div class="mt-5 flex gap-2">
                    <button class="button-primary bg-gray-500/80 hover:bg-gray-500/90">
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
@endsection
