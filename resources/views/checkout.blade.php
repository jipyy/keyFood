@extends('layouts.main')
@section('container')
<section class="home" id="home">
    <main>
        <section class="checkout-form">
            <form action="#!" method="get">
                <h3>Contact information</h3>
                <div class="form-control">
                    <label for="checkout-email">E-mail</label>
                    <div>
                        <span class="fa"><i class='bx bx-envelope'></i></span>
                        <input type="email" id="checkout-email" name="checkout-email" placeholder="Enter your email...">
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-phone">Phone</label>
                    <div>
                        <span class="fa"><i class='bx bx-phone'></i></span>
                        <input type="tel" name="checkout-phone" id="checkout-phone" placeholder="Enter you phone...">
                    </div>
                </div>
                <br>
                <h3>Shipping address</h3>
                <div class="form-control">
                    <label for="checkout-name">Full name</label>
                    <div>
                        <span class="fa"><i class='bx bx-user-circle'></i></span>
                        <input type="text" id="checkout-name" name="checkout-name" placeholder="Enter you name...">
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-address">Address</label>
                    <div>
                        <span class="fa"><i class='bx bx-home'></i></span>
                        <input type="text" name="checkout-address" id="checkout-address" placeholder="Your address...">
                    </div>
                </div>
                <div class="form-control">
                    <label for="checkout-city">City</label>
                    <div>
                        <span class="fa"><i class='bx bx-building'></i></span>
                        <input type="text" name="checkout-city" id="checkout-city" placeholder="Your city...">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-control">
                        <label for="checkout-country">Country</label>
                        <div>
                            <span class="fa"><i class='bx bx-globe'></i></span>
                            <input type="text" name="checkout-country" id="checkout-country"
                                placeholder="Your country..." list="country-list">
                            <datalist id="country-list">
                                <option value="India"></option>
                                <option value="USA"></option>
                                <option value="Russia"></option>
                                <option value="Japan"></option>
                                <option value="Egypt"></option>
                            </datalist>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="checkout-postal">Postal code</label>
                        <div>
                            <span class="fa"><i class='bx bx-archive'></i></span>
                            <input type="numeric" name="checkout-postal" id="checkout-postal"
                                placeholder="Your postal code...">
                        </div>
                    </div>
                </div>
                <div class="form-control-btn">
                    <button>Continue</button>
                </div>
            </form>
        </section>

        <section class="checkout-details">
            <div class="checkout-details-inner">
                <div class="checkout-lists">
                    <div class="card-product">
                        <div class="card-image"><img src="https://rvs-checkout-page.onrender.com/photo1.png" alt="">
                        </div>
                        <div class="card-details" data-counter-id="1">
                            <div class="card-name">Vintage Backbag</div>
                            <div class="card-price" data-price="2000">2000</div>
                            <div class="card-wheel">
                                <button class="decrement">-</button>
                                <span class="count" data-count="1">1</span>
                                <button class="increment">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-product">
                        <div class="card-image"><img src="https://rvs-checkout-page.onrender.com/photo1.png" alt="">
                        </div>
                        <div class="card-details" data-counter-id="2">
                            <div class="card-name">Vintage adad</div>
                            <div class="card-price" data-price="2000">2000</div>
                            <div class="card-wheel">
                                <button class="decrement">-</button>
                                <span class="count" data-count="1">1</span>
                                <button class="increment">+</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="checkout-total">
                    <h6>Total</h6>
                    <p class="total-price">Rp </p>
                </div>
            </div>
        </section>

    </main>
</section>
@endsection
