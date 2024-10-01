<form method="POST" action="{{ route('login') }}" class="sign-in-form">
    @csrf
    <h2 class="title">
        <img src="img/login.svg" style="width: 150px; align-items: center;" alt="">
    </h2>

    <div class="input-field">
        <i class="fas fa-phone"></i>
        <input type="number" id="phone" placeholder="No. HP" name="phone" value="{{ old('phone') }}"
            style="background: transparent" required />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" placeholder="Password" name="password" style="background: transparent"
            required />

        <!-- Icon mata untuk show dan hide -->
        <ion-icon id="show-eye" name="eye-outline" style="cursor: pointer;"></ion-icon>
        <ion-icon id="hide-eye" name="eye-off-outline" style="display: none; cursor: pointer;"></ion-icon>
    </div>
    <input type="submit" value="Login" class="btn solid" />
    <a href="/forgot-passwordw" style="text-decoration: none;"
        class="inline-flex items-center px-4 py-2  bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
        <p class="social-text">Lupa Password</p>
    </a>
    <p class="social-text">Atau Login Dengan Google</p>
    <div class="social-media">
        <a href="/auth/google" class="social-icon">
            <i class="fab fa-google"></i>
        </a>
    </div>
</form>



<!-- SweetAlert Integration -->
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: @json($errors->first()),
                    timer: 3000, // Durasi tampilan alert dalam milidetik
                    showConfirmButton: false
                });
            }, 1000); // Penundaan dalam milidetik (1 detik)
        });


        // Ambil elemen input password dan icon
        const passwordField = document.getElementById('password');
        const showEye = document.getElementById('show-eye');
        const hideEye = document.getElementById('hide-eye');

        // Fungsi untuk toggle password visibility
        function togglePassword() {
            if (passwordField.type === 'password') {
                passwordField.type = 'text'; // Ubah menjadi teks (password terlihat)
                showEye.style.display = 'none'; // Sembunyikan ikon mata terbuka
                hideEye.style.display = 'inline'; // Tampilkan ikon mata tertutup
            } else {
                passwordField.type = 'password'; // Ubah kembali menjadi password (tersembunyi)
                showEye.style.display = 'inline'; // Tampilkan ikon mata terbuka
                hideEye.style.display = 'none'; // Sembunyikan ikon mata tertutup
            }
        }

        // Event listener untuk ikon
        showEye.addEventListener('click', togglePassword);
        hideEye.addEventListener('click', togglePassword);
    </script>
@endif
