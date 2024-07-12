
<form method="POST" action="{{ route('login') }}" class="sign-in-form">
    @csrf
    <h2 class="title">
      <img src="img/login.svg" style="width: 150px; align-items: center;" alt="">
    </h2>
    <div class="input-field">
      <i class="fas fa-envelope"></i>
      <input type="email" placeholder="Email" name="email" required />
    </div>
    <div class="input-field">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" name="password" required />
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
      <a href="#" class="social-icon">
        <i class="fab fa-google"></i>
      </a>
      <a href="#" class="social-icon">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
  </form>