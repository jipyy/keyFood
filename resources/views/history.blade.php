@extends('layouts.main')

@section('container')
    @if (session('success'))
        <script>
            // Hapus data cart dari localStorage setelah redirect
            localStorage.removeItem('cart');
        </script>
    @endif
    @if ($orders->isEmpty())
        <section class="bg-tranparent min-h-screen flex items-center justify-center p-4">
            <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md w-full">
                <div class="relative mb-8">
                    <img src="{{ asset('../img/no-order.png') }}" alt="Empty box" class="w-40 h-40 mx-auto" />
                </div>
                <h2 class="text-3xl font-bold mb-4 text-gray-800">Pesanan Masih Kosong:(</h2>
                <p class="text-gray-600 mb-8"> Anda belum memesan apa pun. Temukan produk-produk menarik kami dan tambahkan
                    ke keranjang belanja Anda!</p>
                <a href="/categories">
                    <button
                        class="w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold py-3 px-6 rounded-full hover:from-pink-600 hover:to-purple-700 transition duration-300 transform hover:scale-105">
                        Ayo Beli Sesuatu!
                    </button>
                </a>
                <div class="mt-6 text-center">
                    <a href="/faqc" class="text-sm text-purple-600 hover:text-purple-800 transition duration-300">Butuh Bantuan? Chat Kami</a>
                </div>
            </div>
        </section>
    @else
        <section class="my-20 mx-5" id="history">
            @foreach ($orders as $order)
                <div class="history-container my-7 border border-gray-300 pt-9 rounded-lg">
                    <div class="flex max-md:flex-col items-center justify-between px-3 md:px-11">
                        <div class="data p-4 max-w-full overflow-hidden">
                            <p class="font-medium text-lg leading-8 text-black whitespace-normal break-words">
                                Order: {{ $order->no_order }}
                            </p>
                            <p class="font-medium text-lg leading-8 text-black whitespace-normal break-words">
                                Order Selesai: {{ \Carbon\Carbon::parse($order->tanggal_order)->format('d F Y') }}
                            </p>
                            <p class="font-medium text-lg leading-8 text-black whitespace-normal break-words">
                                Alamat: {{ $order->location }}
                            </p>
                        </div>

                        <div class="flex items-center gap-3 max-md:mt-2">
                            <button
                                class="rounded-full px-7 py-3 bg-indigo-600 shadow-sm shadow-transparent text-white font-semibold text-sm transition-all duration-500 hover:shadow-indigo-400 hover:bg-indigo-700">
                                Beli Lagi
                            </button>
                        </div>
                    </div>
                    <svg class="my-9 max-md:my-3 w-full" xmlns="http://www.w3.org/2000/svg" width="1216" height="2"
                        viewBox="0 0 1216 2" fill="none">
                        <path d="M0 1H1216" stroke="#D1D5DB" />
                    </svg>

                    @if ($order->orderDetails && $order->orderDetails->isNotEmpty())
                        @foreach ($order->orderDetails as $orderDetail)
                            <div class="flex max-lg:flex-col items-center gap-8 lg:gap-24 px-3 md:px-11">
                                <div class="grid grid-cols-4 w-full">
                                    <div class="col-span-4 sm:col-span-1 flex justify-center">
                                        <img class="max-md: max-w-20 max-md:max-h-20 w-24 h-24 max-sm:mx-auto"
                                            src="{{ $order->photo }}" alt="">
                                    </div>
                                    <div
                                        class="col-span-4 sm:col-span-3 max-sm:mt-4 sm:pl-8 flex flex-col justify-center max-sm:items-center">
                                        <h6
                                            class="font-manrope font-semibold text-2xl leading-9 text-black mb-3 whitespace-nowrap">
                                            {{ $orderDetail->products->name }}
                                        </h6>
                                        <p
                                            class="font-normal text-lg leading-8 text-gray-500 mb-8 max-md:mb-2 whitespace-nowrap">
                                            Toko: {{ $orderDetail->products->toko->id_toko }}
                                        </p>
                                        <div class="flex items-center max-sm:flex-col gap-x-10 gap-y-3">
                                            <span
                                                class="font-normal text-lg leading-8 text-gray-500 dark:text-gray-300 whitespace-nowrap">Kategori:
                                                {{ $orderDetail->products->category->name }}</span>
                                            <span
                                                class="font-normal text-lg leading-8 text-gray-500 dark:text-gray-300 whitespace-nowrap">Qty:
                                                {{ $orderDetail->quantity }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-around w-full sm:pl-28 lg:pl-0">
                                    <div class="flex flex-col justify-center items-start max-sm:items-center">
                                        <p class="font-semibold text-xl leading-8 text-black whitespace-nowrap">Harga/pcs:
                                            Rp. {{ number_format($order->products->price, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                            <svg class="mt-9 max-md:mt-3 w-full" xmlns="http://www.w3.org/2000/svg" width="1216"
                                height="2" viewBox="0 0 1216 2" fill="none">
                                <path d="M0 1H1216" stroke="#D1D5DB" />
                            </svg>
                        @endforeach
                    @endif

                    <div class="px-3 md:px-11 flex items-center justify-between max-sm:flex-col-reverse">
                        <div class="flex max-sm:flex-col-reverse items-center">
                            <button
                                class="flex items-center gap-3 py-10 max-md:py-5 pr-8 sm:border-r border-gray-300 font-normal text-xl leading-8 text-gray-500 dark:text-gray-300 group transition-all duration-500 hover:text-red-600">
                                <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        class="stroke-gray-600 dark:stroke-gray-300 transition-all duration-500 group-hover:stroke-red-600"
                                        d="M14.0261 14.7259L25.5755 26.2753M14.0261 26.2753L25.5755 14.7259" stroke=""
                                        stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span style=></span> Hapus Riwayat
                            </button>
                            <p class="complete font-normal text-xl leading-8 text-gray-500 sm:pl-8">Pembelian Berhasil!</p>
                        </div>
                        <p class="font-medium text-xl leading-8 text-black max-md:py-2">
                            <span class="text-gray-500">Total Harga: </span> &nbsp;Rp.
                            {{ number_format($order->orderDetails->sum(function ($detail) {return $detail->unit_price;}) ?? 0,0,',','.') }}
                        </p>
                    </div>
                </div>
            @endforeach
    @endif
    </section>
@endsection
