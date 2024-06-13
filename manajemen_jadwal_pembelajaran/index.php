<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Silahkan Login Ngabb</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylelogin.css">

  <style>
    body {
      background-color: #fff;
      color: #fff;
    }

    .card {
      background: linear-gradient(to right, #fc5c7d, #6a82fb);
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      border-radius: 1rem;
    }

    .form-outline input.form-control {
      color: #000000;
      border-color: #fff;
    }

    .btn-primary {
      background: linear-gradient(to right, #fc5c7d, #6a82fb);
      border-color: #fff;
    }

    .btn-primary:hover {
      background: linear-gradient(to right, #fc5c7d, #6a82fb);
      border-color: #fff;
    }
  </style>
</head>

<body>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <!-- Formulir -->
            <form action="cek_login.php" method="post">

              <?php
                // Tampilkan pesan pop-up jika password salah
                if(isset($_GET['pesan'])){
                  if($_GET['pesan']=="gagal"){
                    echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
                  }
                }
              ?>

              <div class="form-outline mb-4">
                <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="username" required />
                <label class="form-label" for="typeEmailX-2">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" required />
                <label class="form-label" for="typePasswordX-2">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" name="remember" />
                <label class="form-check-label" for="form1Example3"> Remember password </label>
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            </form>
            <!-- Akhir Formulir -->

            <hr class="my-4">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>
