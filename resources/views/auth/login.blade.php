<form method="POST" action="{{ route('login') }}" class="sign-in-form">
    @csrf
    <h2 class="title">
        <img src="img/login.svg" style="width: 150px; align-items: center;" alt="">
    </h2>

    {{-- email --}}
    {{-- <div class="input-field">
      <i class="fas fa-envelope"></i>
      <input type="email" id="email" placeholder="Email" name="email" value="{{ old('email') }}" style="background: transparent" required />
    </div> --}}

    <div class="input-field">
        <i class="fas fa-phone"></i>
        <input type="number" id="phone" placeholder="No. HP" name="phone" value="{{ old('phone') }}"
            style="background: transparent" required />
    </div>
    <div class="input-field">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" placeholder="Password" name="password" style="background: transparent"
            required />
    </div>
    <input type="submit" value="Login" class="btn solid" />
    <a href="{{ route('forgot.password') }}" style="text-decoration: none;" class="inline-flex items-center px-4 py-2  bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-200">
        <p class="social-text">Lupa Password</p>
    </a>    
    <p class="social-text">Atau Login Dengan Google</p>
    <div class="social-media">
        <a href="{{ url('auth/google') }}" class="social-icon">
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
    </script>
@endif


