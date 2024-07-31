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
                        <a href="javascript:void(0)" data-product-id="{{ $product->id }}" class="cart-btn">
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
                {{ $products->links() }}
            </div>
        </section>
    </section>
    <script>
        function getData() {
            let cart = JSON.parse(localStorage.getItem('cart')) || {};
            if (Object.keys(cart).length === 0) {
                document.getElementById('cart').innerHTML = '<p>Your cart is empty.</p>';
                document.getElementById('count-cart').innerHTML = 0;
                document.getElementById('total-price').innerHTML = 'Rp 0';
            } else {
                let totalPrice = 0;
                document.getElementById('count-cart').innerHTML = Object.keys(cart).length;
                document.getElementById('cart').innerHTML = '';
                for (let key in cart) {
                    let itemTotal = cart[key].price * cart[key].quantity;
                    totalPrice += itemTotal;
                    document.getElementById('cart').innerHTML += `
                      <div
                            class="cart-item rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4 ">
                            <div class="col-span-12 lg:col-span-2 img box">
                                <img src="${cart[key].photo}" alt="${cart[key].name}"
                                    class="max-lg:w-full lg:w-[180px] rounded-lg">
                            </div>
                            <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
                                <div class="flex items-center justify-between w-full mb-4">
                                    <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">Round white
                                        portable
                                        speaker</h5>
                                         <a href="javascript:void(0)" class="remove" data-remove-id="${key}">
                                            <button
                                                class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle
                                                        class="fill-red-50 transition-all duration-500 group-hover:fill-red-400"
                                                        cx="17" cy="17" r="17" fill="" />
                                                    <path
                                                        class="stroke-red-500 transition-all duration-500 group-hover:stroke-white"
                                                        d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z"
                                                        stroke="#EF4444" stroke-width="1.6" stroke-linecap="round" />
                                                </svg>
                                            </button>      
                                        </a>
                                </div>
                                <p class="font-normal text-base leading-7 text-gray-500 mb-6">
                                    Introducing our sleek round white portable speaker, the epitome of style and sound!
                                    Elevate your auditory experience with this compact yet powerful device that delivers
                                    crystal-clear audio wherever you go. <a href="javascript:;"
                                        class="text-indigo-600">More....</a>
                                </p>
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center gap-4">
                                        <a href="javascript:void(0)" class="decrement" data-decrement-id="${key}">
                                            <button
                                                class="group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                                <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                                    width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.5 9.5H13.5" stroke="" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </a>
                                        <input type="text" id="number"
                                            class="border border-gray-200 rounded-full w-10 aspect-square outline-none text-gray-900 font-semibold text-sm py-1.5 px-3 bg-gray-100  text-center"
                                            placeholder="${cart[key].quantity}">
                                        <button
                                            class="group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                            <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black"
                                                width="18" height="19" viewBox="0 0 18 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.75 9.5H14.25M9 14.75V4.25" stroke="" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h6 class="price text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">
                                        Rp ${itemTotal.toLocaleString('id-ID')}</h6>
                                </div>
                            </div>
                        </div>`;
                }
                document.getElementById('total-price').innerHTML = 'Rp ' + totalPrice.toLocaleString('id-ID');
            }
        }

        $(function() {
            getData();
        });

        $(document).ready(function() {
            $('.cart-btn').on('click', function() {
                let productId = $(this).data('product-id');
                let cart = JSON.parse(localStorage.getItem('cart')) || {};
                
                if (cart[productId]) {
                    cart[productId].quantity++;
                } else {
                    cart[productId] = {
                        name: $(this).siblings('strong').text(),
                        price: parseFloat($(this).siblings('.price').text().replace('Rp ', '').replace(/\./g, '')),
                        photo: $(this).siblings('img').attr('src'),
                        quantity: 1
                    };
                }
                
                localStorage.setItem('cart', JSON.stringify(cart));
                getData();
            });

            $(document).on('click', '.decrement', function() {
                let productId = $(this).data('decrement-id');
                let cart = JSON.parse(localStorage.getItem('cart')) || {};

                if (cart[productId]) {
                    if (cart[productId].quantity > 1) {
                        cart[productId].quantity--;
                    } else {
                        delete cart[productId];
                    }
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                getData();
            });

            $(document).on('click', '.remove', function() {
                let productId = $(this).data('remove-id');
                let cart = JSON.parse(localStorage.getItem('cart')) || {};

                if (cart[productId]) {
                    delete cart[productId];
                }

                localStorage.setItem('cart', JSON.stringify(cart));
                getData();
            });
        });
    </script>
@endsection
