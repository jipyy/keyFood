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
                        <div class="cart-item">
                            <img src="${cart[key].photo}" alt="${cart[key].name}">
                            <h5>${cart[key].name}</h5>
                            <span class="price">Rp ${itemTotal.toLocaleString('id-ID')}</span>
                            <p>${cart[key].quantity}</p>
                            <a href="javascript:void(0)" class="decrement" data-decrement-id="${key}">-</a>
                            <a href="javascript:void(0)" class="remove" data-remove-id="${key}">Remove</a>
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
