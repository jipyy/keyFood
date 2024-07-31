<div class="icon-cart show-modal">
    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
    </svg>
    {{-- <span>{{ count(session('cart', [])) }}</span> --}}
    <span id="count-cart">{{ count(session('cart', [])) }}</span>
</div>

<div class="bottom-sheet">
    <div class="sheet-overlay"></div>
    <div class="content">
        <div class="header">
            <div class="drag-icon"><span></span></div>
        </div>
        <div class="body">
            <section class="py-24 relative">
                <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">
                    <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-black">
                        Shopping Cart
                    </h2>
                    <div id="cart"></div>
                    

                    <div>
                        <h4>Total Price: <span id="total-price">Rp 0</span></h4>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
</div>
