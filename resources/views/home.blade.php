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
                    <div class="text-container">
                        <p>*Catatan: Direkomendasikan Dibuka Melalui Ponsel</p>
                    </div>
                </div>
            </div>
        </div>
@foreach ($cms as $company )

        <div class="box-container" id="rounded-rect">
            <div class="content">
                <section class="section__container header__container" id="home">
                    <div class="header__image">
                        <img src="{{ $company->gambar_home_1 }}" alt="header " class="header-img" />
                    </div>
                    <div class="header__content">
                        <h1>Beli, Makan & Nikmati <span>Makanan Terbaik</span>.</h1>
                        <p class="section__description">
                            Rasakan esensi kenikmatan kuliner sejati saat Anda menemukan, mencicipi, dan menikmati cita rasa
                            otentik yang mendefinisikan hasrat kami terhadap makanan.
                        </p>
                        <div class="header__btn">
                            <a href="/categories">
                                <button class="btn">Ayo Lihat!</button>
                            </a>
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
                            <img src="../img/special-1.png" alt="special" class="header-img" />
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
                            <img src="../img/special-2.png" alt="special" class="header-img" />
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
                            <img src="../img/special-3.png" alt="special" class="header-img" />
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
                        <img src="{{ $company->gambar_home_2 }}" alt="explore" class="header-img" />
                    </div>
                    <div class="explore__content">
                        <h1 class="section__header">Nikmati Lezatnya Hidup Sehat!</h1>
                        <p class="section__description">
                            Manjakan diri tanpa rasa bersalah dengan komitmen kami menyajikan hidangan lezat yang
                            menyehatkan. Jelajahi menu yang dirancang khusus untuk menyeimbangkan rasa dan nutrisi,
                            memastikan setiap suapan memuaskan sekaligus menyehatkan.
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
                        <h4>Pesan Kilat, Makan Nikmat!</h4>
                        <p>
                            Pesan makanan jadi lebih mudah! Cukup beberapa klik, santapan favoritmu siap diantar. Nikmati
                            praktisnya pilih menu beragam dari kami, semuanya lezat!
                        </p>
                        <a href="#">
                            Read more
                            <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                    <div class="banner__card">
                        <span class="banner__icon"><i class="ri-truck-fill"></i></span>
                        <h4>Jelajah Rasa, Puaskan Selera!</h4>
                        <p>
                            Mau hidangan yang gurih, manis, atau yang lain? Semuanya ada di sini! Kamu bebas pilih sesuai
                            seleramu! Kami punya banyak pilihan
                            yang pasti bikin kamu puas.
                        </p>
                        <a href="#">
                            Read more
                            <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                    <div class="banner__card">
                        <span class="banner__icon"><i class="ri-star-smile-fill"></i></span>
                        <h4>Santai Saja, Biar Kami yang Urus!</h4>
                        <p>
                            Setelah pesan, tinggal duduk manis, deh! Biarkan kami siapkan pesananmu dengan sepenuh hati.
                            Cicipi setiap suapan kelezatannya, karena kepuasanmu adalah prioritas kami.
                        </p>
                        <a href="#">
                            Read more
                            <span><i class="ri-arrow-right-line"></i></span>
                        </a>
                    </div>
                </section>

                <section class="chef" id="chef">
                    <img src="../img/topping.png" alt="topping" class="chef__bg" />
                    <div class="section__container chef__container">
                        <div class="chef__image">
                            <img src="{{ $company->gambar_home_3 }}" alt="chef" class="header-img" />
                        </div>
                        <div class="chef__content">
                            <h2 class="section__header">Siap Diantar Di Mana Saja & Kapan Saja!</h2>
                            <p class="section__description">
                                Tak perlu khawatir tentang waktu, karena kami siap melayani Anda dari pagi hingga malam.
                                Dengan sistem pemesanan yang mudah dan praktis, Anda dapat menikmati hidangan lezat tanpa
                                harus repot keluar rumah.
                            </p>
                            <ul class="chef__list">
                                <li>
                                    <span><i class="ri-checkbox-fill"></i></span>
                                    Tidak perlu antre atau keluar rumah untuk menikmati hidangan favorit.
                                </li>
                                <li>
                                    <span><i class="ri-checkbox-fill"></i></span>
                                    Temukan berbagai macam hidangan dari restoran-restoran terbaik di
                                    kota Anda.
                                </li>
                                <li>
                                    <span><i class="ri-checkbox-fill"></i></span>
                                    Nikmati diskon dan penawaran spesial khusus untuk pelanggan pesan antar.
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
                                        <img src="../img/client-1.jpg" alt="client"
                                            class="header-img" />
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
                                        <img src="../img/client-2.jpg" alt="client" />
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
                                        <img src="../img/client-3.jpg" alt="client" />
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

    </section>

    @endforeach

    <script>
        document.addEventListener('scroll', () => {
            let clock = document.getElementById('clock');
            let scrollValue = window.scrollY;
            console.log(scrollValue);

            clock.style.top = scrollValue + 'px';
        })
    </script>

     {{-- <!-- Sweet Alert Script -->
    <script>
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                timer: 30000000,
                showConfirmButton: true,
            });
        @endif
    
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '{{ session('error') }}',
                timer: 30000000,
                showConfirmButton: true,
            });
        @endif
    </script> --}}
@endsection
