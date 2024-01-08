<!-- resources/views/login/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Puskesmas Umban Sari</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-6p0F/BMkePuRa8QZ7fELU5WNWhDoEaqGgCTvKC36FvNiGGt5NXp1kE2RjIb1nho5u7hJY8ciq8huKcBo6RV5yA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-6p0F/BMkePuRa8QZ7fELU5WNWhDoEaqGgCTvKC36FvNiGGt5NXp1kE2RjIb1nho5u7hJY8ciq8huKcBo6RV5yA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
  <!-- Custom CSS -->
  <style>
     body {
    background-image: url('landingPage/images/gambar2.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative; /* Tambahkan properti position: relative; */
  }

  /* Tambahkan overlay hitam */
  body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Atur warna hitam dan tingkat transparansi sesuai kebutuhan */
  }

  .sufee-login {
    display: flex;
    align-items: center;
  }

  .login-content {
    max-width: 400px;
    width: 100%;
  }

  .login-logo img {
    max-width: 100%;
    margin-bottom: 20px;
  }

  .card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }

  .card-body {
    padding: 40px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  .btn-success {
    background-color: #24695C;
    border: none;
    outline: none;
  }

  .btn-success:hover {
    background-color: #218838;
  }

  /* Tambahan style untuk tombol Back */
  .btn-secondary {
    background-color: #343a40; /* Warna hitam */
    border: none;
    outline: none;
  }

  .btn-secondary:hover {
    background-color: #23272b; /* Warna hitam yang sedikit lebih gelap pada hover */
  }

   .password-toggle {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }

  </style>
</head>

<body>

  <div class="sufee-login">
    <div class="container">
      <div class="login-content">
        <div class="card">
          <div class="card-body">
            <div class="login-logo">
              <a href="{{ route('landingPage.index') }}">
                <img class="align-content" src="landingPage/images/logo1.png" alt="logo">
              </a>
            </div>
            @if (session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
            @endif
          <form action="{{ route('login.post') }}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
              <label>Email address</label>
              <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <div class="input-group">
                <input name="password" type="password" class="form-control" placeholder="Password" id="password-input">
                <div class="input-group-append">
                  <span class="input-group-text password-toggle" onclick="togglePasswordVisibility()">
                    <i class="fa-regular fa-eye-slash"></i></i>
                  </span>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-success btn-block">Login</button>
          </form>
            <!-- Tombol Back -->
            <div class="mt-3">
              <a href="{{ route('landingPage.index') }}" class="btn btn-secondary btn-block">Back to Landing Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 
 <script>
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password-input");
    var eyeIcon = document.getElementById("eye-icon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.className = "fas fa-eye-slash";
    } else {
      passwordInput.type = "password";
      eyeIcon.className = "fas fa-eye";
    }
  }
</script>

</body>

</html>