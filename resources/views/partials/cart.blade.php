
<div class="icon-cart show-modal">
    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
    </svg>
    <span>0</span>
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
                    {{-- card1 --}}
                    <div class="rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4 cards" data-counter-id="4">
                        <div class="col-span-12 lg:col-span-2 img box">
                            <img src="https://pagedone.io/asset/uploads/1701162826.png" alt="speaker image" class="max-lg:w-full lg:w-[180px] rounded-lg">
                        </div>
                        <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
                            <div class="flex items-center justify-between w-full mb-4">
                                <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">Round white portable speaker</h5>
                                <button class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="fill-red-50 transition-all duration-500 group-hover:fill-red-400" cx="17" cy="17" r="17" fill="" />
                                        <path class="stroke-red-500 transition-all duration-500 group-hover:stroke-white" d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z" stroke="#EF4444" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <p class="font-normal text-base leading-7 text-gray-500 mb-6">
                                Introducing our sleek round white portable speaker, the epitome of style and sound! Elevate your auditory experience with this compact yet powerful device that delivers crystal-clear audio wherever you go. <a href="javascript:;" class="text-indigo-600">More....</a>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <button class="subtract group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.5 9.5H13.5" stroke="" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <input type="text" id="quantity" class="quantity border border-gray-200 rounded-full w-10 aspect-square outline-none text-gray-900 font-semibold text-sm py-1.5 px-3 bg-gray-100 text-center" value="1">
                                    <button class="add group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9.5H14.25M9 14.75V4.25" stroke="" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right price" >$220</h6>
                            </div>
                        </div>
                    </div>
                    
                    <!-- card2 -->
                    <div class="rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4" data-counter-id="5">
                        <div class="col-span-12 lg:col-span-2 img box">
                            <img src="https://pagedone.io/asset/uploads/1701162839.png" alt="speaker image" class="max-lg:w-full lg:w-[180px] rounded-lg">
                        </div>
                        <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
                            <div class="flex items-center justify-between w-full mb-4">
                                <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">Gray round portable speaker</h5>
                                <button class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle class="fill-red-50 transition-all duration-500 group-hover:fill-red-400" cx="17" cy="17" r="17" fill="" />
                                        <path class="stroke-red-500 transition-all duration-500 group-hover:stroke-white" d="M14.1673 13.5997V12.5923C14.1673 11.8968 14.7311 11.333 15.4266 11.333H18.5747C19.2702 11.333 19.834 11.8968 19.834 12.5923V13.5997M19.834 13.5997C19.834 13.5997 14.6534 13.5997 11.334 13.5997C6.90804 13.5998 27.0933 13.5998 22.6673 13.5997C21.5608 13.5997 19.834 13.5997 19.834 13.5997ZM12.4673 13.5997H21.534V18.8886C21.534 20.6695 21.534 21.5599 20.9807 22.1131C20.4275 22.6664 19.5371 22.6664 17.7562 22.6664H16.2451C14.4642 22.6664 13.5738 22.6664 13.0206 22.1131C12.4673 21.5599 12.4673 20.6695 12.4673 18.8886V13.5997Z" stroke="#EF4444" stroke-width="1.6" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <p class="font-normal text-base leading-7 text-gray-500 mb-6">
                                Introducing our sleek round white portable speaker, the epitome of style and sound! Elevate your auditory experience with this compact yet powerful device that delivers crystal-clear audio wherever you go. <a href="javascript:;" class="text-indigo-600">More....</a>
                            </p>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-4">
                                    <button class="subtract group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.5 9.5H13.5" stroke="" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <input type="text" id="quantity" class="quantity border border-gray-200 rounded-full w-10 aspect-square outline-none text-gray-900 font-semibold text-sm py-1.5 px-3 bg-gray-100 text-center" value="1">
                                    <button class="add group rounded-[50px] border border-gray-200 shadow-sm shadow-transparent p-2.5 flex items-center justify-center bg-white transition-all duration-500 hover:shadow-gray-200 hover:bg-gray-50 hover:border-gray-300 focus-within:outline-gray-300">
                                        <svg class="stroke-gray-900 transition-all duration-500 group-hover:stroke-black" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.75 9.5H14.25M9 14.75V4.25" stroke="" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <h6 class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right price" >$220</h6>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="flex flex-col md:flex-row items-center md:items-center justify-between lg:px-6 pb-6 border-b border-gray-200 max-lg:max-w-lg max-lg:mx-auto">
                        <h5 class="text-gray-900 font-manrope font-semibold text-2xl leading-9 w-full max-md:text-center max-md:mb-4">Subtotal</h5>
                        <div class="flex items-center justify-between gap-5 ">
                            <button class="rounded-full py-2.5 px-3 bg-indigo-50 text-indigo-600 font-semibold text-xs text-center whitespace-nowrap transition-all duration-500 hover:bg-indigo-100">Promo Code?</button>
                            <h6 class="font-manrope font-bold text-3xl lead-10 text-indigo-600 total">$440</h6>
                        </div>
                    </div>
                    <div class="max-lg:max-w-lg max-lg:mx-auto">
                        <p class="font-normal text-base leading-7 text-gray-500 text-center mb-5 mt-6">Shipping taxes, and discounts calculated at checkout</p>
                        <button class="rounded-full py-4 px-6 bg-indigo-600 text-white font-semibold text-lg w-full text-center transition-all duration-500 hover:bg-indigo-700">Checkout</button>
                    </div>


                </div>
        </div>
    </div>
    </section>

</div>
</div>
</div>

{{-- <script>
document.addEventListener('DOMContentLoaded', function() {
    // Fungsi untuk memformat harga dalam mata uang rupiah
    const formatRupiah = (amount) => {
        return `Rp${amount.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}`;
    };

    // Fungsi untuk memperbarui nilai input counter dan total harga
    const updateCounterAndTotal = (card) => {
        const quantityInput = card.querySelector('.quantity');
        const addButton = card.querySelector('.add');
        const subtractButton = card.querySelector('.subtract');
        const priceElement = card.querySelector('.price');
        const cardId = card.getAttribute('data-counter-id');
        const price = parseFloat(priceElement.getAttribute('data-price'));

        // Memuat data dari localStorage
        const savedQuantity = localStorage.getItem(`product-${cardId}`);
        if (savedQuantity !== null) {
            quantityInput.value = parseInt(savedQuantity) || 0;
        } else {
            quantityInput.value = 0;
        }

        const updateTotal = () => {
            const total = Array.from(document.querySelectorAll('[data-counter-id]')).reduce((acc, card) => {
                const quantity = parseInt(card.querySelector('.quantity').value) || 0;
                const price = parseFloat(card.querySelector('.price').getAttribute('data-price'));
                return acc + (quantity * price);
            }, 0);
            document.querySelector('.total').textContent = formatRupiah(total);
        };

        const saveToLocalStorage = () => {
            localStorage.setItem(`product-${cardId}`, quantityInput.value);
        };

        addButton.addEventListener('click', () => {
            quantityInput.value = (parseInt(quantityInput.value) || 0) + 1;
            saveToLocalStorage();
            updateTotal();
        });

        subtractButton.addEventListener('click', () => {
            const currentQuantity = parseInt(quantityInput.value) || 0;
            if (currentQuantity > 1) {
                quantityInput.value = currentQuantity - 1;
                saveToLocalStorage();
                updateTotal();
            }
        });

        // Initial total update
        updateTotal();
    };

    // Loop melalui setiap kartu dengan data-counter-id yang berbeda
    document.querySelectorAll('[data-counter-id]').forEach(card => {
        updateCounterAndTotal(card);
    });
    console.log(localStorage.getItem(`product-${cardId}`, quantityInput.value));
});
</script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk memformat harga dalam mata uang rupiah
        const formatRupiah = (amount) => {
            return `Rp${amount.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}`;
        };
    
        // Fungsi untuk memuat data keranjang dari Local Storage
        const getCartData = () => JSON.parse(localStorage.getItem('cart')) || {};
    
        // Fungsi untuk menyimpan data keranjang ke Local Storage
        const saveCartData = (cart) => localStorage.setItem('cart', JSON.stringify(cart));
    
        // Fungsi untuk memperbarui total harga
        const updateTotal = () => {
            const total = Array.from(document.querySelectorAll('[data-counter-id]')).reduce((acc, card) => {
                const quantity = parseInt(card.querySelector('.quantity').value) || 0;
                const price = parseFloat(card.querySelector('.price').getAttribute('data-price'));
                return acc + (quantity * price);
            }, 0);
            document.querySelector('.total').textContent = formatRupiah(total);
        };
    
        // Fungsi untuk memperbarui nilai input counter dan menyimpan ke Local Storage
        const updateCounterAndTotal = (card) => {
            const quantityInput = card.querySelector('.quantity');
            const addButton = card.querySelector('.add');
            const subtractButton = card.querySelector('.subtract');
            const priceElement = card.querySelector('.price');
            const cardId = card.getAttribute('data-counter-id');
    
            // Memuat data dari localStorage
            const cart = getCartData();
            const savedQuantity = cart[cardId] || 0;
            quantityInput.value = savedQuantity;
    
            // Fungsi untuk menyimpan data ke Local Storage
            const saveToLocalStorage = () => {
                const cart = getCartData();
                cart[cardId] = parseInt(quantityInput.value) || 0;
                saveCartData(cart);
                updateTotal(); // Memperbarui total harga setiap kali data disimpan
            };
    
            // Event listener untuk tombol tambah
            addButton.addEventListener('click', () => {
                quantityInput.value = (parseInt(quantityInput.value) || 0) + 1;
                saveToLocalStorage();
            });
    
            // Event listener untuk tombol kurangi
            subtractButton.addEventListener('click', () => {
                const currentQuantity = parseInt(quantityInput.value) || 0;
                if (currentQuantity > 1) {
                    quantityInput.value = currentQuantity - 1;
                    saveToLocalStorage();
                }
            });
    
            // Menangani perubahan manual dari input quantity
            quantityInput.addEventListener('input', () => {
                const currentQuantity = parseInt(quantityInput.value) || 0;
                if (currentQuantity >= 0) { // Menghindari nilai negatif
                    saveToLocalStorage();
                }
            });
        };
    
        // Fungsi untuk memperbarui semua elemen card yang ada
        const initializeCart = () => {
            document.querySelectorAll('[data-counter-id]').forEach(card => {
                updateCounterAndTotal(card);
            });
        };
    
        // Inisialisasi halaman cart
        initializeCart();
    
        // Menangani perubahan langsung dari Local Storage
        window.addEventListener('storage', (event) => {
            if (event.key === 'cart') {
                initializeCart(); // Perbarui cart ketika ada perubahan di Local Storage
            }
        });
    
        // Debugging: Menampilkan data keranjang dari LocalStorage
        console.log('Cart Data:', JSON.stringify(getCartData()));
    });
    </script>
    
    




    