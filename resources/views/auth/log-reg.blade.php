<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
  <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
  <link rel="stylesheet" href="{{ asset('../css/style-login.css') }}">
  <!-- SweetAlert CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">
  <title>Sign in / Sign up</title>
</head>

<body>
  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.js"></script>
  <div id="preloader">
    <dotlottie-player src="https://lottie.host/cfd42497-424b-4328-8abd-fddc7a43046c/RORTJFVPEA.json"
      background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></dotlottie-player>
  </div>

  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
       @include('auth.login')

       @include('auth.register')
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Baru di sini? Selamat datang! Mari buat akun dan mulai perjalanan kuliner Anda.
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Register
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Have an Account ?</h3>
          <p>
            Sedang ingin sesuatu yang spesial? Login dan mari kita puaskan selera Anda!
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="{{ asset('../js/login.js') }}"></script>
</body>
</html>
