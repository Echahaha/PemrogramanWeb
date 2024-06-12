<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('login/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('login/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('login/dist/css/adminlte.min.css') }}">
  <!-- Custom style -->
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDR8fGRhcmt8ZW58MHx8fHwxNjQ5NzU5NjY4&ixlib=rb-1.2.1&q=80&w=1080') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Source Sans Pro', sans-serif;
    }

    .login-box {
      width: 400px;
      margin: 7% auto;
      background: rgba(255, 255, 255, 0.8);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      text-align: center;
    }

    .login-logo a {
      color: #333;
      font-size: 2.5rem;
      font-weight: bold;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
    }

    .login-card-body {
      background: transparent;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }

    .form-control {
      border-radius: 0;
      transition: box-shadow 0.3s;
    }

    .form-control:focus {
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .input-group-text {
      border-radius: 0;
    }

    .icheck-primary label {
      color: #333;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .login-box-msg {
      margin-bottom: 30px; /* Menambahkan jarak antara teks login dan kolom email */
    }

    .checkbox-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 40px; /* Menambahkan jarak antara checkbox dan tombol sign in */
    }

    a {
      color: #007bff;
    }

    a:hover {
      color: #0056b3;
      text-decoration: underline;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login terlebih dahulu.</p>

      <form action="{{ route('postLogin') }}" method="post">
        @csrf <!-- Tambahkan token CSRF -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row checkbox-container">
          <div class="icheck-primary">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">
              Remember Me
            </label>
          </div>
          <div>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('login/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('login/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('login/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
