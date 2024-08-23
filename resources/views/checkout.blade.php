@extends('layouts.main')
@section('container')
<section id="home">
    <main class="mt-10">
        <section class="checkout-form">
            <form id="checkout-form" action="{{ route('checkout.store') }}" method="post">
                @csrf
                <h2 class="font-manrope font-extrabold text-3xl lead-10 text-black mb-9">Pesanan Anda</h2>
                <!-- Email Input -->
                <div class="form-control">
                    <label for="checkout-email">E-mail</label>
                    <div>
                        <span class="fa"><i class='bx bx-envelope'></i></span>
                        <input type="email" id="checkout-email" name="checkout-email" placeholder="Enter your email.. (opsional)." value="{{ old('checkout-email', $user->email ?? '') }}" required>
                    </div>
                </div>
                <!-- Phone Input -->
                <div class="form-control">
                    <label for="checkout-phone">Phone</label>
                    <div>
                        <span class="fa"><i class='bx bx-phone'></i></span>
                        <input type="tel" name="checkout-phone" id="checkout-phone" placeholder="Enter your phone..." value="{{ old('checkout-phone', $user->phone ?? '') }}" required>
                    </div>
                </div>
                <br>
                <!-- Shipping Address -->
                <h3>Shipping address</h3>
                <div class="form-control">
                    <label for="checkout-name">Full name</label>
                    <div>
                        <span class="fa"><i class='bx bx-user-circle'></i></span>
                        <input type="text" id="checkout-name" name="checkout-name" placeholder="Enter your name..." value="{{ old('checkout-name', $user->name ?? '') }}" required>
                    </div>
                </div>
                <!-- Cluster Dropdown -->
                <div class="form-control">
                    <label for="cluster-select">Pilih Cluster</label>
                    <div>
                        <span class="fa"><i class='bx bx-building'></i></span>
                        <select name="cluster_id" id="cluster-select" required>
                            <option value="" disabled selected>Pilih Cluster...</option>
                            @foreach($clusters as $cluster)
                                <option value="{{ $cluster->id }}">{{ $cluster->nama_cluster }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- Alamat Dropdown -->
                <div class="form-control">
                    <label for="alamat-select">Pilih Alamat</label>
                    <div>
                        <span class="fa"><i class='bx bx-home'></i></span>
                        <select name="alamat_cluster_id" id="alamat-select" required>
                            <option value="" disabled selected>Pilih Alamat...</option>
                        </select>
                    </div>
                </div>
                <!-- Nomor Dropdown -->
                <div class="form-control">
                    <label for="nomor-select">Pilih Nomor</label>
                    <div>
                        <span class="fa"><i class='bx bx-home'></i></span>
                        <select name="nomor_id" id="nomor-select" required>
                            <option value="" disabled selected>Pilih Nomor...</option>
                        </select>
                    </div>
                </div>
                <!-- Notes Input -->
                <div class="form-control">
                    <label for="checkout-notes">Catatan</label>
                    <div>
                        <span class="fa"><i class='bx bx-edit'></i></span>
                        <input type="text" name="checkout-notes" id="checkout-notes" placeholder="Catatan Anda.. (opsional)" value="{{ old('checkout-notes') }}">
                    </div>
                </div>
                <!-- Hidden Inputs for Products and Total Price -->
                <input type="hidden" name="products" id="products" required>
                <input type="hidden" name="total_price" id="hidden-total-price" required>
                <div class="form-control-btn">
                    <button type="submit">Checkout</button>
                </div>
            </form>
        </section>

        <section class="checkout-details mt-20">
            <div class="checkout-details-inner">
                <div class="checkout-lists" id="checkout-lists">
                    <!-- Card products will be appended here by JavaScript -->
                </div>
                <div class="checkout-total">
                    <h6>Total</h6>
                    <p class="total-price" id="total-price">Rp 0</p>
                </div>
            </div>
        </section>
    </main>
</section>

    <script>
        document.getElementById('checkout-form').addEventListener('submit', function(event) {
            const products = JSON.parse(localStorage.getItem('cart')) || [];
            const totalPrice = document.getElementById('total-price').textContent.replace(/[^\d]/g,
            ''); // Menghilangkan simbol 'Rp' dan koma

            document.getElementById('products').value = JSON.stringify(products);
            document.getElementById('hidden-total-price').value = totalPrice;

             // Menghapus data dari LocalStorage setelah checkout
             localStorage.removeItem('cart');

        });
    </script>
@endsection
