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
                        {{-- <a href="{{ route('add.to.cart', $product->id) }}" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add Cart
                        </a> --}}
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
                {{-- Menampilkan link pagination --}}
                {{ $products->links() }}
            </div>
        </section>
    </section>
    <script>
        function getData() {
            $.ajax({
                url: '/data',
                type: 'GET',
                success: function(res) {
                    if(res.data == null){
                        document.getElementById('cart').innerHTML = '<p>Your cart is empty.</p>'
                        document.getElementById('count-cart').innerHTML = 0
                        document.getElementById('total-price').innerHTML = 'Rp 0'
                    } else {
                        let totalPrice = 0
                        document.getElementById('count-cart').innerHTML = Object.keys(res.data).length
                        document.getElementById('cart').innerHTML = ""
                        for (let key in res.data) {
                            let itemTotal = res.data[key].price * res.data[key].quantity
                            totalPrice += itemTotal
                            document.getElementById('cart').innerHTML += `
                                <div class="cart-item">
                                    <img src="${res.data[key].photo}" alt="${res.data[key].name}">
                                    <h5>${res.data[key].name}</h5>
                                    <span class="price">Rp ${itemTotal.toLocaleString('id-ID')}</span>
                                    <p>${res.data[key].quantity}</p>
                                    <a href="javascript:void(0)" class="decrement" data-decrement-id="${key}">-</a>
                                    <a href="javascript:void(0)" class="remove" data-remove-id="${key}">Remove</a>
                                </div>`
                        }
                        document.getElementById('total-price').innerHTML = 'Rp ' + totalPrice.toLocaleString('id-ID')
                    }
                }
            })
        }

        $(function() {
            getData()
        })

        $(document).ready(function() {
            $('.cart-btn').on('click', function() {
                let productId = $(this).data('product-id')

                $.ajax({
                    url: '/cart/add/' + productId,
                    type: 'GET',
                    success: function(res) {
                        getData()
                    }
                })
            })

            // Delegasi event untuk decrement dan remove
            $(document).on('click', '.decrement', function() {
                let productId = $(this).data('decrement-id')
                $.ajax({
                    url: "/cart/decrement/" + productId,
                    type: 'GET',
                    success: function(res) {
                        console.log('Success Decrease')
                        getData()
                    },
                    error: function(err) {
                        console.log(err)
                    }
                })
            })

            $(document).on('click', '.remove', function() {
                let productId = $(this).data('remove-id')
                $.ajax({
                    url: "/cart/remove/" + productId,
                    type: 'GET',
                    success: function(res) {
                        getData()
                    }
                })
            })
        })
    </script>
@endsection
