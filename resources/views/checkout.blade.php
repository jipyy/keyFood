@extends('layouts.main')
@section('container')
<section class="" id="home">
    <main>
        <section class="checkout-form">
            <form action="#!" method="get">
                <h2 class="font-manrope font-extrabold text-3xl lead-10 text-black mb-9">Pesanan Anda</h2>
                <div class="form-control">
                    <label for="checkout-email">E-mail</label>
                    <div>
                        <span class="fa"><i class='bx bx-envelope'></i></span>
                        <input type="email" id="checkout-email" name="checkout-email" placeholder="Enter your email.. (opsional)." value="{{ $user->email ?? '' }}">
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-phone">Phone</label>
                    <div>
                        <span class="fa"><i class='bx bx-phone'></i></span>
                        <input type="tel" name="checkout-phone" id="checkout-phone" placeholder="Enter you phone..." value="{{ $user->phone ?? '' }}" >
                    </div>
                </div>
                <br>
                <h3>Shipping address</h3>
                <div class="form-control">
                    <label for="checkout-name">Full name</label>
                    <div>
                        <span class="fa"><i class='bx bx-user-circle'></i></span>
                        <input type="text" id="checkout-name" name="checkout-name" placeholder="Enter you name..." value="{{ $user->name ?? '' }}">
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-address">Alamat</label>
                    <div>
                        <span class="fa"><i class='bx bx-home'></i></span>
                        <input type="text" name="checkout-address" id="checkout-address" placeholder="Your address..." value="{{ $user->location ?? '' }}">
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-address">Catatan</label>
                    <div>
                        <span class="fa"><i class='bx bx-edit'></i></span>
                        <input type="text" name="checkout-address" id="checkout-address" placeholder="Catatan Anda.. (opsional)" value="">
                    </div>
                </div>
                <div class="form-control-btn">
                    <button type="submit">Checkout</button>
                </div>
            </form>
        </section>

        <section class="checkout-details">
            <div class="checkout-details-inner">
                <div class="checkout-lists" id="checkout-lists">
                    <!-- Card products will be appended here by JavaScript -->
                </div>
                <div class="checkout-total">
                    <h6>Total</h6>
                    <p class="total-price" id="total-price">Rp 0</p>
                </div>
            </div>
        </section>
    </main>
</section>
@endsection
