@extends('layouts.main')

@section('container')
    <section id="home" class="mt-11">
        <section id="search-banner">
            {{-- bg --}}
            <img alt="bg" class="bg-1" src="{{ asset('img/bg-1.png') }}">
            <img alt="bg-2" class="bg-2" src="{{ asset('img/topping.png') }}">
            {{-- text --}}
            <div class="search-banner-text">
                <h1>Pesan Makananmu Sekarang!</h1>
                <strong>#GratisOngkir</strong>
                {{-- search --}}
                <form action="" class="search-boxs" onsubmit="return false;">
                    <i class="fas fa-search"></i>
                    <input type="text" id="search" class="search-inputs" placeholder="Cari makanan yang anda mau"
                        name="search">
                    <input type="submit" class="search-btns" value="Search">
                </form>
            </div>
        </section>

        <section id="category">
            <div class="category-heading">
                <h2>Kategori</h2>
                <a href="#" class="showall active"><span>Semua</span></a>
            </div>
            <div class="category-container">
                @foreach ($categories as $category)
                    <a href="#" class="category-box" data-category="{{ $category->name }}">
                        <img alt="Product" src="{{ asset($category->icon) }}">
                        <span>{{ $category->name }}</span>
                    </a>
                @endforeach
            </div>
        </section>

        <section id="popular-bundle-pack">
            <div class="product-heading">
                <h3>Daftar Produk</h3>
            </div>
            <div class="product-container" id="product-list">
                @foreach ($products as $product)
                    <div class="product-box" data-category="{{ $product->category->name }}">
                        <img alt="{{ $product->name }}" src="{{ asset($product->photo) }}">
                        <strong>{{ $product->name }}</strong>
                        <span class="quantity">Store: {{ $product->toko ? $product->toko->nama_toko : 'Unknown' }}</span>
                        <span class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <a href="javascript:void(0)" data-product-id="{{ $product->id }}" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Tambah Ke Keranjang
                        </a>
                        <a href="#" class="view-btn">
                            <i class="far fa-eye"></i>
                        </a>
                    </div>
                @endforeach
            </div>

            @include('partials.cart')
            <div class="pagination">
                {{ $products->links() }}
            </div>
        </section>
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Flag to indicate if a category is selected
        let isCategorySelected = false;

        // Live Search
        $('#search').on('keyup', function() {
            var query = $(this).val();
            isCategorySelected = false; // Reset category selection state
            performSearch(query); // Perform search with the query
        });

        // Category Selection
        $('.category-box').on('click', function(e) {
            e.preventDefault(); // Prevent default link behavior
            var category = $(this).data('category');
            $('#search').val(''); // Clear the search input
            isCategorySelected = true; // Mark that a category has been selected
            $('.category-box').removeClass('active');
            $(this).addClass('active');
            performSearch('', category); // Perform search with the selected category
        });

        function performSearch(query = '', category = '') {
            $.ajax({
                url: "{{ route('search') }}",
                type: "GET",
                data: {
                    'query': query,
                    'category': category
                },
                success: function(data) {
                    $('#product-list').empty();

                    const products = data.data || []; // Ensure data.data is an array of products

                    if (Array.isArray(products) && products.length > 0) {
                        $.each(products, function(index, product) {
                            var productHtml = '<div class="product-box" data-category="' + (
                                    product.category ? product.category.name : 'Unknown') +
                                '">' +
                                '<img alt="' + product.name + '" src="' +
                                '{{ asset('') }}' + product.photo + '">' +
                                '<strong>' + product.name + '</strong>' +
                                '<span class="quantity">Store: ' + (product.toko ? product
                                    .toko.nama_toko : 'Unknown') + '</span>' +
                                '<span class="price">Rp ' + new Intl.NumberFormat('id-ID')
                                .format(product.price) + '</span>' +
                                '<a href="javascript:void(0)" data-product-id="' + product
                                .id + '" class="cart-btn">' +
                                '<i class="fas fa-shopping-bag"></i> Tambah Ke Keranjang</a>' +
                                '<a href="#" class="view-btn"><i class="far fa-eye"></i></a>' +
                                '</div>';
                            $('#product-list').append(productHtml);
                        });
                    } else {
                        $('#product-list').append('<p class="text-gray-500">No products found</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        }
    });
</script>
