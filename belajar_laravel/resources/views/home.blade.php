<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/Badan.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
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
      margin-left: auto;
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

    th,
    td {
      text-align: center;
    }

    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      overflow-x: hidden;
      overflow-y: auto;
    }

    #myVideo {
      position: fixed;
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      color: white;
    }
  </style>
</head>

<body>

<video autoplay muted loop id="myVideo">
  <source src=".mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">MJP|| Manajemen Jadwal Pembelajaran</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/abouthome') }}">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2>Welcome to Database Jadwal Pembelajaran</h2>
  <p class="lead">"Hai Admin! Selamat datang di Dashboard Admin Jadwal Pembelajaran. Kami memberikan kontrol penuh ke tangan Anda untuk membuat jadwal pembelajaran yang efisien dan menginspirasi. Yuk, mari kita optimalkan".</p>
</div>

<div class="container mt-3">
  <div class="row">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Guru</h5>
          <p class="card-text">Melihat dan mengelola informasi tentang guru.</p>
          <a href="{{ url('/guru') }}" class="btn btn-primary">Go to Data Guru</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Mapel</h5>
          <p class="card-text">Jelajahi dan kelola informasi Mapel.</p>
          <a href="{{ url('/mapel') }}" class="btn btn-primary">Go to Data Mapel</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Pembelajaran</h5>
          <p class="card-text">Mengatur jadwal belajar mengajar.</p>
          <a href="{{ url('/pembelajaran') }}" class="btn btn-primary">Go to Data Pembelajaran</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
