
{{-- <form method="POST" action="{{ route('login') }}" class="sign-in-form">
    @csrf
    <h2 class="title">
      <img src="img/login.svg" style="width: 150px; align-items: center;" alt="">
    </h2>
    <div class="input-field">
      <i class="fas fa-envelope"></i>
      <input type="email" id="email" placeholder="Email" name="email" value="{{ old('email') }}" style="background: transparent" required />
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
  </form> --}}


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





  {{-- Ini adalah form bawaan laravel breeze --}}

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}