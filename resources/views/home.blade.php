@extends('layouts.main')
@section('container')
    <section class="clock container" id="home">
        <div class="clock__container grid" id="clock">
            <div class="clock__content grid">
                <div class="clock__circle">
                    <span class="clock__twelve"></span>
                    <span class="clock__three"></span>
                    <span class="clock__six"></span>
                    <span class="clock__nine"></span>

                    <div class="clock__rounder"></div>
                    <div class="clock__hour" id="clock-hour"></div>
                    <div class="clock__minutes" id="clock-minutes"></div>
                    <div class="clock__seconds" id="clock-seconds"></div>

                    <!-- Dark/light button -->
                    <div class="clock__theme">
                        <i class='bx bxs-moon' id="theme-button"></i>
                    </div>
                </div>

                <div>
                    <div class="clock__text">
                        <div class="clock__text-hour" id="text-hour"></div>
                        <div class="clock__text-minutes" id="text-minutes"></div>
                        <div class="clock__text-ampm" id="text-ampm"></div>
                    </div>

                    <div class="clock__date">
                        <!-- <span id="date-day-week"></span> -->
                        <span id="date-day"></span>
                        <span id="date-month"></span>
                        <span id="date-year"></span>
                    </div>
                </div>
            </div>
        </div>

    <div class="box" id="rounded-rect">
        <div class="content">
            <section class="section__container header__container" id="home">
                <div class="header__image">
                    <img src="{{ asset('../img/5.png') }}" alt="header "  class="header-img"/>
                </div>
                <div class="header__content">
                    <h1>Beli, Makan & Nikmati <span>Makanan Terbaik</span>.</h1>
                    <p class="section__description">
                        Discover the true essence of culinary delight as you meet, eat, and
                        savor the authentic flavors that define our passion for food.
                    </p>
                    <div class="header__btn">
                        <button class="btn">Get Started</button>
                    </div>
                </div>
            </section>




            <section class="section__container special__container" id="special">
                <h2 class="section__header">Our Special Dish</h2>
                <p class="section__description">
                    Each dish promises an unforgettable dining experience, blending
                    innovation with tradition to delight your senses.
                </p>
                <div class="special__grid">
                    <div class="special__card">
                        <img src="{{ asset('../img/special-1.png') }}" alt="special"  class="header-img"/>
                        <h4>Chicken Veg Curry</h4>
                        <p>
                            Diced chicken simmered in aromatic curry sauce with mixed veggies
                            like potatoes, cauliflower, and beans for a hearty, flavorful dish.
                        </p>
                        <div class="special__ratings">
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                        </div>
                        <div class="special__footer">
                            <p class="price">$12.50</p>
                            <button class="btn">Add to Cart</button>
                        </div>
                    </div>
                    <div class="special__card">
                        <img src="{{ asset('../img/special-2.png') }}" alt="special" class="header-img" />
                        <h4>Chicken Veg Stir-Fry</h4>
                        <p>
                            Tender chicken strips wok-tossed with a colorful array of fresh
                            vegetables in a flavorful blend of spices and sauces.
                        </p>
                        <div class="special__ratings">
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                        </div>
                        <div class="special__footer">
                            <p class="price">$18.50</p>
                            <button class="btn">Add to Cart</button>
                        </div>
                    </div>
                    <div class="special__card">
                        <img src="{{ asset('../img/special-3.png') }}" alt="special" class="header-img" />
                        <h4>Chicken Veg Pasta</h4>
                        <p>
                            Al dente pasta tossed with chicken strips and a mix of vibrant
                            vegetables in a creamy garlic herb sauce, offering a delightful
                            pasta experience.
                        </p>
                        <div class="special__ratings">
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                            <span><i class="ri-star-fill"></i></span>
                        </div>
                        <div class="special__footer">
                            <p class="price">$15.50</p>
                            <button class="btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section__container explore__container">
                <div class="explore__image">
                    <img src="{{ asset('../img/explore.png') }}" alt="explore" class="header-img" />
                </div>
                <div class="explore__content">
                    <h1 class="section__header">We Serve Healthy & Tasty Food</h1>
                    <p class="section__description">
                        Indulge guilt-free with our commitment to serving wholesome and
                        delicious meals. Explore a menu curated to balance taste and
                        nutrition, ensuring every bite is both satisfying and nourishing.
                    </p>
                    <div class="explore__btn">
                        <button class="btn">
                            Explore Story <span><i class="ri-arrow-right-line"></i></span>
                        </button>
                    </div>
                </div>
            </section>

            <section class="section__container banner__container">
                <div class="banner__card">
                    <span class="banner__icon"><i class="ri-bowl-fill"></i></span>
                    <h4>Order Your Food</h4>
                    <p>
                        Seamlessly place your food orders online with just a few clicks. Enjoy
                        convenience and efficiency as you select from our diverse menu of
                        delectable dishes.
                    </p>
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
                <div class="banner__card">
                    <span class="banner__icon"><i class="ri-truck-fill"></i></span>
                    <h4>Pick Your Food</h4>
                    <p>
                        Customize your dining experience by choosing from a tantalizing array
                        of options. For savory, sweet, or in between craving, find the perfect
                        meal to satisfy your appetite.
                    </p>
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
                <div class="banner__card">
                    <span class="banner__icon"><i class="ri-star-smile-fill"></i></span>
                    <h4>Enjoy Your Food</h4>
                    <p>
                        Sit back, relax, and savor the flavors as your meticulously prepared
                        meal arrives. Delight in the deliciousness of every bite, knowing that
                        your satisfaction is our top priority.
                    </p>
                    <a href="#">
                        Read more
                        <span><i class="ri-arrow-right-line"></i></span>
                    </a>
                </div>
            </section>

            <section class="chef" id="chef">
                <img src="{{ asset('../img/topping.png') }}" alt="topping" class="chef__bg" />
                <div class="section__container chef__container">
                    <div class="chef__image">
                        <img src="{{ asset('../img/chef.png') }}" alt="chef" class="header-img" />
                    </div>
                    <div class="chef__content">
                        <h2 class="section__header">Cooked By The Best Chefs In The World</h2>
                        <p class="section__description">
                            Experience culinary excellence crafted by master chefs from around
                            the globe. Our team of culinary virtuosos brings together expertise,
                            innovation, and passion to create unforgettable dining experiences
                            that redefine gastronomy.
                        </p>
                        <ul class="chef__list">
                            <li>
                                <span><i class="ri-checkbox-fill"></i></span>
                                Savour culinary brilliance from master chefs worldwide.
                            </li>
                            <li>
                                <span><i class="ri-checkbox-fill"></i></span>
                                Experience innovative creations with attention to detail.
                            </li>
                            <li>
                                <span><i class="ri-checkbox-fill"></i></span>
                                Enjoy dishes crafted with an unwavering passion for perfection.
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="section__container client__container" id="client">
                <h2 class="section__header">What Our Customers Are Saying</h2>
                <p class="section__description">
                    Discover firsthand experiences and testimonials from our valued patrons.
                    Explore the feedback and reviews that showcase our commitment to
                    quality, service, and customer satisfaction.
                </p>
                <div class="client__swiper">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="client__card">
                                    <p>
                                        FoodMan's culinary expertise never fails to impress! Every
                                        dish is a masterpiece, bursting with flavor and freshness.
                                    </p>
                                    <img src="{{ asset('../img/client-1.jpg') }}" alt="client"  class="header-img"/>
                                    <h4>David Lee</h4>
                                    <h5>Business Executive</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client__card">
                                    <p>
                                        I always turn to FoodMan for a quick and delicious meal. Their
                                        efficient service and mouthwatering options never disappoint!
                                    </p>
                                    <img src="{{ asset('../img/client-2.jpg') }}" alt="client" />
                                    <h4>Emily Johnson</h4>
                                    <h5>Food Blogger</h5>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="client__card">
                                    <p>
                                        FoodMan has become my go-to for all my catering needs. Their
                                        attention to detail and exceptional customer service make
                                        every event a success.
                                    </p>
                                    <img src="{{ asset('../img/client-3.jpg') }}" alt="client" />
                                    <h4>Michael Thompson</h4>
                                    <h5>Event Planner</h5>
                                </div>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</section>


    {{-- <div class="container mt-4">
        <div class="slider">

            <div class="list">
                <div class="item">
                    <img src="img/1.png">
                </div>
                <div class="item active">
                    <img src="img/2.png">
                </div>
                <div class="item">
                    <img src="img/3.png">
                </div>
                <div class="item">
                    <img src="img/4.png">
                </div>
                <div class="item">
                    <img src="img/5.png">
                </div>
            </div>
            <div class="circle">
                KeyFood - Unlock the Flavor of Your City - Taste the Difference with KeyFood.
            </div>
            <div class="content">
                <div>Menus On</div>
                <div>KeyFood</div>
                <button>See More</button>

            </div>
            <div class="arow">
                <button id="prev">
                    < </button>
                        <button id="next">></button>
            </div>
        </div>
            </div> --}}


    <script>
        document.addEventListener('scroll', () => {
            let clock = document.getElementById('clock');
            let scrollValue = window.scrollY;
            console.log(scrollValue);

            clock.style.top = scrollValue + 'px';
        })
    </script>
@endsection
