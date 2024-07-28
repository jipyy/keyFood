<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('../css/faq.css') }}">
</head>
<body>
    <div class="accordion">
        {{-- Product --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="first" checked>
                <label for="first">Produk</label>
                <div class="content">
                    <p>
                        Apa saja produk yang tersedia di toko ini?
                        <br>
                        Kami menawarkan berbagai macam produk, mulai dari elektronik, pakaian, peralatan rumah tangga, hingga produk kecantikan dan kesehatan.
                        <br><br>
                        Bagaimana cara mencari produk yang saya inginkan?
                        <br>
                        Anda dapat menggunakan fitur pencarian di bagian atas halaman atau menelusuri kategori produk untuk menemukan produk yang Anda inginkan.
                        <br><br>
                        Apakah produk yang dijual asli?
                        <br>
                        Ya, semua produk yang kami jual adalah asli dan berkualitas tinggi. Kami bekerja sama dengan berbagai merek terpercaya untuk memastikan keaslian produk.
                    </p>
                </div>
            </li>
        </ul>
        {{-- Information --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="second">
                <label for="second">Informasi</label>
                <div class="content">
                    <p>
                        Bagaimana cara mengetahui detail produk?
                        <br>
                        Setiap halaman produk menyertakan deskripsi lengkap, spesifikasi, ulasan pelanggan, dan gambar produk. Anda dapat melihat semua informasi ini dengan mengklik produk yang Anda minati.
                        <br><br>
                        Apakah ada garansi untuk produk yang dibeli?
                        <br>
                        Ya, banyak produk kami dilengkapi dengan garansi dari pabrik. Informasi garansi dapat ditemukan di halaman detail produk atau dengan menghubungi layanan pelanggan kami.
                        <br><br>
                        Bagaimana cara melacak pesanan saya?
                        <br>
                        Setelah pesanan Anda dikirim, Anda akan menerima email dengan nomor pelacakan. Anda dapat menggunakan nomor ini untuk melacak status pengiriman pesanan Anda di situs web kurir.
                    </p>
                </div>
            </li>
        </ul>
        {{-- Question --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="third">
                <label for="third">Pertanyaan Umum</label>
                <div class="content">
                    <p>
                        Bagaimana cara membuat akun?
                        <br>
                        Anda dapat membuat akun dengan mengklik tombol "Daftar" di bagian atas halaman dan mengisi informasi yang diperlukan. Setelah mendaftar, Anda dapat masuk dan mulai berbelanja.
                        <br><br>
                        Bagaimana cara mengubah atau membatalkan pesanan?
                        <br>
                        Untuk mengubah atau membatalkan pesanan, segera hubungi layanan pelanggan kami dengan nomor pesanan Anda. Kami akan membantu Anda secepat mungkin.
                        <br><br>
                        Apa metode pembayaran yang diterima?
                        <br>
                        Kami menerima berbagai metode pembayaran, termasuk kartu kredit, kartu debit, transfer bank, dan pembayaran melalui e-wallet.
                    </p>
                </div>
            </li>
        </ul>
        {{-- Guide --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="fourth">
                <label for="fourth">Panduan</label>
                <div class="content">
                    <p>
                        Bagaimana cara melakukan pembelian?
                        <ul>
                            <li>1. Cari produk yang Anda inginkan.</li>
                            <li>2. Klik produk untuk melihat detailnya.</li>
                            <li>3. Klik "Tambah ke Keranjang" untuk memasukkan produk ke keranjang belanja Anda.</li>
                            <li>4. Buka keranjang belanja Anda dan klik "Checkout".</li>
                        </ul>
                    </p>
                </div>
            </li>
        </ul>
        {{-- pengembalian --}}
        <ul>
            <li>
                <input type="radio" name="accordion" id="fifth">
                <label for="fifth">Pengembalian</label>
                <div class="content">
                    <p>
                        Bagaimana cara mengembalikan produk?
                        <br>
                            Jika Anda tidak puas dengan produk yang diterima, Anda dapat mengajukan permohonan pengembalian dalam waktu 30 hari setelah menerima produk. Hubungi layanan pelanggan kami untuk memulai proses pengembalian.
                        <br><br>
                            Bagaimana cara menggunakan kupon atau kode promo?
                            <br>
                            Anda dapat memasukkan kupon atau kode promo pada halaman pembayaran. Masukkan kode di kotak yang disediakan dan klik "Terapkan" untuk melihat diskon yang diterapkan pada total pembelian Anda.
                        <br><br>
                            Semoga FAQ ini membantu menjawab pertanyaan Anda. Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi layanan pelanggan kami.
                    </p>
                </div>
            </li>
        </ul>

    </div>
</body>
</html>
