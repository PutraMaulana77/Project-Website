<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tentang</title>
  <link rel="stylesheet" href="Badan.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <!-- Tambahan Font Awesome jika diperlukan -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-LCbqo8OZUfUZ5KI++t5gWtfSP+dhBl4f+sBRg+Mc0JFlThtvO8it6h4DQuWOhvzKb/NJmmUcDzPZDoGkt4K7gQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <style>
    .navbar {
      background: linear-gradient(to right, #fc5c7d, #6a82fb);
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }

    .navbar-toggler-icon {
      background-color: #fff;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    .navbar-nav .nav-link {
      color: #fff;
      position: relative; 
      transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover::before {
      transform: scaleX(1); 
      width: 90%; 
    }

    .navbar-nav {
      margin-left: auto; /* Move navbar to the right */
    }

    .navbar-nav .nav-link::before {
      content: "";
      display: block;
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background-color: #adcfd8;
      transform-origin: 0 0;
      transition: width 0.3s ease-in-out;
    }

    .container {
      max-width: 800px;
      padding: 20px;
      background-color: #fff; 
      margin: 20px auto;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #3498db;
      text-align: center;
    }

    a.add-link {
      color: #3498db;
      text-decoration: none;
    }

    table {
      width: 100%;
    }

    th, td {
      text-align: center;
    }

    /* Sesuaikan dengan gaya yang Anda inginkan */
    body {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index2.php">DATABASE USER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="AboutHome.php">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- About Us Content -->
  <div class="container">
    <h2>Tentang Kami</h2>
    <p>
      Selamat datang di platform Database Admin kami! Kami siap untuk berkomitmen dalam memberikan Anda alat terbaik dalam pengelolaan data pendidikan.
    </p>
    <p>
      Misi kami adalah menyederhanakan proses penanganan informasi terkait guru, mata pelajaran, dan kegiatan pembelajaran. Baik Anda seorang guru atau siswa platform kami dirancang untuk memenuhi kebutuhan Anda.
    </p>
    <p>
      Terima kasih telah memilih kami dalam pengelolaan data pendidikan. Jika Anda memiliki pertanyaan atau umpan balik, jangan ragu untuk <a href="contact.php">menghubungi kami</a>.
    </p>
    <a href="index2.php" class="btn btn-danger btn-sm">Kembali</a>
  </div>


  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
