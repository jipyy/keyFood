@extends('layouts.main')

@section('container')
    @if($orders->isEmpty())
        <p class="my-20 mx-20">No orders found.</p>
    @else
        @foreach ($orders as $order)
            <div class="history-container mt-7 border border-gray-300 pt-9 rounded-lg">
                <div class="flex max-md:flex-col items-center justify-between px-3 md:px-11">
                    <div class="data p-4 max-w-full overflow-hidden">
                        <p class="font-medium text-lg leading-8 text-black whitespace-normal break-words">
                            Order: #{{ $order->no_order }}
                        </p>
                        <p class="font-medium text-lg leading-8 text-black whitespace-normal break-words">
                            Order Selesai: {{ \Carbon\Carbon::parse($order->tanggal_order)->format('d F Y') }}
                        </p>
                        <p class="font-medium text-lg leading-8 text-black whitespace-normal break-words">
                            Alamat: {{ $order->location }}
                        </p>
                    </div>

                    <div class="flex items-center gap-3 max-md:mt-5">
                        <button
                            class="rounded-full px-7 py-3 bg-indigo-600 shadow-sm shadow-transparent text-white font-semibold text-sm transition-all duration-500 hover:shadow-indigo-400 hover:bg-indigo-700">
                            Beli Lagi
                        </button>
                    </div>
                </div>
                <svg class="my-9 w-full" xmlns="http://www.w3.org/2000/svg" width="1216" height="2" viewBox="0 0 1216 2" fill="none">
                    <path d="M0 1H1216" stroke="#D1D5DB" />
                </svg>

                @if($order->orderDetails && $order->orderDetails->isNotEmpty())
                    @foreach ($order->orderDetails as $orderDetail)
                        <div class="flex max-lg:flex-col items-center gap-8 lg:gap-24 px-3 md:px-11">
                            <div class="grid grid-cols-4 w-full">
                                <div class="col-span-4 sm:col-span-1">
                                    <img src="{{ $order->photo }}" alt="" class="max-sm:mx-auto">
                                </div>
                                <div class="col-span-4 sm:col-span-3 max-sm:mt-4 sm:pl-8 flex flex-col justify-center max-sm:items-center">
                                    <h6 class="font-manrope font-semibold text-2xl leading-9 text-black mb-3 whitespace-nowrap">
                                        {{ $orderDetail->products->name }}
                                    </h6>
                                    <p class="font-normal text-lg leading-8 text-gray-500 mb-8 whitespace-nowrap">
                                        Toko: {{ $orderDetail->products->toko->id_toko }}
                                    </p>
                                    <div class="flex items-center max-sm:flex-col gap-x-10 gap-y-3">
                                        <span class="font-normal text-lg leading-8 text-gray-500 whitespace-nowrap">Kategori: {{ $orderDetail->products->category->name}}</span>
                                        <span class="font-normal text-lg leading-8 text-gray-500 whitespace-nowrap">Qty: {{ $orderDetail->quantity }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-around w-full sm:pl-28 lg:pl-0">
                                <div class="flex flex-col justify-center items-start max-sm:items-center">
                                    <p class="font-semibold text-xl leading-8 text-black whitespace-nowrap">Harga: Rp. {{ number_format($order->products->price, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                        <svg class="mt-9 w-full" xmlns="http://www.w3.org/2000/svg" width="1216" height="2" viewBox="0 0 1216 2" fill="none">
                            <path d="M0 1H1216" stroke="#D1D5DB" />
                        </svg>
                    @endforeach
                @endif

                <div class="px-3 md:px-11 flex items-center justify-between max-sm:flex-col-reverse">
                    <div class="flex max-sm:flex-col-reverse items-center">
                        <button
                            class="flex items-center gap-3 py-10 pr-8 sm:border-r border-gray-300 font-normal text-xl leading-8 text-gray-500 group transition-all duration-500 hover:text-indigo-600">
                            <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-gray-600 transition-all duration-500 group-hover:stroke-indigo-600"
                                    d="M14.0261 14.7259L25.5755 26.2753M14.0261 26.2753L25.5755 14.7259" stroke="" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Hapus Riwayat
                        </button>
                        <p class="complete font-normal text-xl leading-8 text-gray-500 sm:pl-8">Pembelian Berhasil!</p>
                    </div>
                    <p class="font-medium text-xl leading-8 text-black max-sm:py-4"> 
                        <span class="text-gray-500">Total Harga: </span> &nbsp;Rp. {{ number_format($order->orderDetails->sum(function($detail) { return $detail->unit_price; }) ?? 0, 0, ',', '.') }}
                    </p>
                </div>
            </div>
        @endforeach
    @endif
@endsection
