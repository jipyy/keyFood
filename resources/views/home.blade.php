@extends('layouts.main')
@section('container')


    <section class="clock container" id="home">
        <div class="clock__container grid">
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
    </section>

    <div class="box">
        <div class="content">
            
            <br><br><br>
           <br><br><br><br><br><br>
            <h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, alias quae. Suscipit libero, natus, at consequatur culpa corporis minima sint est fuga vel sapiente provident neque illo aliquid soluta expedita?

            </h1>
            <br><br><br>
            <h1>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptas excepturi harum enim nisi facere consequatur, vitae cum quasi in, rerum aliquid asperiores. Amet magni ipsum animi ex corrupti aperiam.
            </h1>
            <h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, alias quae. Suscipit libero, natus, at consequatur culpa corporis minima sint est fuga vel sapiente provident neque illo aliquid soluta expedita?

            </h1>
            <br><br><br>
            <h1>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptas excepturi harum enim nisi facere consequatur, vitae cum quasi in, rerum aliquid asperiores. Amet magni ipsum animi ex corrupti aperiam.
            </h1>
            <h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, alias quae. Suscipit libero, natus, at consequatur culpa corporis minima sint est fuga vel sapiente provident neque illo aliquid soluta expedita?

            </h1>
            <br><br><br>
            <h1>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptas excepturi harum enim nisi facere consequatur, vitae cum quasi in, rerum aliquid asperiores. Amet magni ipsum animi ex corrupti aperiam.
            </h1>
            <h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, alias quae. Suscipit libero, natus, at consequatur culpa corporis minima sint est fuga vel sapiente provident neque illo aliquid soluta expedita?

            </h1>
            <br><br><br>
            <h1>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus voluptas excepturi harum enim nisi facere consequatur, vitae cum quasi in, rerum aliquid asperiores. Amet magni ipsum animi ex corrupti aperiam.
            </h1>
        </div>
    </div>
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
@endsection
