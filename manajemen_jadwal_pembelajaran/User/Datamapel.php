<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Mapel</title>
  <link rel="stylesheet" href="Badan.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
  </style>
</head>

<body>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index2.php">DATABASE USER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Dataguru.php">Guru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Datamapel.php">Mapel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Datapemb.php">Pembelajaran</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="About.php">Tentang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Logout.php">LogOut</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container">
    <h2>DATA MATA PELAJARAN</h2>

  
 <!-- Tambahkan form pencarian di atas tabel -->
 <div class="container mt-3">
<form action="" method="get" class="d-flex">

<!-- Button -->
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-outline-success" class="spinner-border spinner-border-sm" type="submit">Cari</button>

    <?php if(isset($_GET['cari'])): ?>
      <a href="Datamapel.php" class="btn btn-danger ml-2">X</a>
    <?php endif; ?>
  </form>
</div>

   






  <!-- TOMBOL -->
  <style>
  .ml-2 {
    margin-left: 10px; /* Sesuaikan dengan jumlah margin yang diinginkan */
  }
</style>

<div class="container mt-3">
  <form action="" method="get" class="d-flex">
   
    
    <!-- TOMBOL PRINT/CETAK -->
    <a href="cetak2.php" target="_blank" class="btn btn-primary ml-2">Cetak</a>
  </form>
</div>


<script>
  function printData() {
    // Panggil fungsi print bawaan browser
    window.print();
  }
</script>



<div class="table-responsive">
  <table id="myTable" class="table table-striped table-bordered mt-1">
      <tr>
        <th>NO</th>
        <th>Tingkat Kelas</th>
        <th>ID Mapel</th>
        <th>Mata Pelajaran</th>
        <th>No Ruangan</th>
       
      </tr>

      <?php 
      include 'koneksi.php';

      // Proses pencarian
      if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysqli_query($koneksi, "SELECT * FROM mapel WHERE ID_Mapel LIKE '%$cari%' OR Mata_Pelajaran LIKE '%$cari%' OR Tingkat_Kelas LIKE '%$cari%' OR No_Ruangan LIKE '%$cari%'");
      } else {
      $data = mysqli_query($koneksi, "SELECT* FROM mapel");
      }


      $no = 1;
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['Tingkat_Kelas']; ?></td>
          <td><?php echo $d['ID_Mapel']; ?></td>
          <td><?php echo $d['Mata_Pelajaran']; ?></td>
          <td><?php echo $d['No_Ruangan']; ?></td>
          
        </tr>
      <?php 
      }
      ?>
    </table>
  </div>
</body>
</html>
