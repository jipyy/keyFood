

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
      <input type="number" id="phone" placeholder="Phone" name="phone" value="{{ old('phone') }}" style="background: transparent" required />
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" id="password" placeholder="Password" name="password" style="background: transparent" required />
    </div>
    <input type="submit" value="Login" class="btn solid" />
    <p class="social-text">Or Sign in with social platforms</p>
    <div class="social-media">
      <a href="#" class="social-icon">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="social-icon">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="{{ url('auth/google') }}" class="social-icon">
        <i class="fab fa-google"></i>
      </a>
      <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
</form>

<!-- SweetAlert Integration -->
@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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