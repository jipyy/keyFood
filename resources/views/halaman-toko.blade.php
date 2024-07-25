@extends('layouts.main')
@section('container')
    <section id="page">
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
        <div class="product-container">
            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="./img/headphone.jpg" alt="headphone">
                <div class="card-content">
                    <div class="badges">
                        <span class="badge">stock ready</span>
                        <span class="badge">official store</span>
                    </div>
                    <h2 class="product-title" title="best headphone">headphone</h2>
                    <div class="product-price">
                        <span class="current-price">Rp 100.000.000</span>
                        <div class="price-details">
                            <span class="old-price">Rp 500.000</span>
                            <span class="discount-percent">save 20%</span>
                        </div>
                    </div>
                    <div class="product-rating">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star.svg" alt="star">
                        <img src="./img/star-half-fill.svg" alt="half star">
                        <img src="./img/star-no-fill.svg" alt="no star">
                        <span class="reviews">20k reviews</span>
                    </div>
                    <div class="product-actions">
                        <button class="button-primary">add to cart</button>
                        <button class="button-icon">
                            <img src="./img/love.svg" alt="add to wishlist">
                        </button>
                        <button class="button-icon">
                            <img src="./img/eye.svg" alt="view details">
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
