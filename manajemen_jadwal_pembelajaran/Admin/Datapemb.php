<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Data Pembelajaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
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
      <a class="navbar-brand" href="Index2.php">DATABASE ADMIN</a>
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
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>




  <div class="container">
    <h2>DATA PEMBELAJARAN</h2>



<!-- Tambahkan form pencarian di atas tabel -->
<div class="container mt-3">
  <form action="Datapemb.php" method="get" class="d-flex">
    <select name="hariFilter" class="form-select">
      <option value="">Pilih Hari</option>
      <option value="Senin">Senin</option>
      <option value="Selasa">Selasa</option>
      <option value="Rabu">Rabu</option>
      <option value="Kamis">Kamis</option>
      <option value="Jumat">Jumat</option>
    </select>

    <!-- Button -->
    <input class="form-control me-2" type="search" name="cari" placeholder="Cari..." aria-label="Search" value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
    <button class="btn btn-outline-success" type="submit">Cari</button>

    <?php if (isset($_GET['cari'])) : ?>
      <a href="Datapemb.php" class="btn btn-danger ml-2">X</a>
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
    <!-- Tombol TAMBAH -->
    <a class="btn btn-primary" href="tambah3.php">+ TAMBAH</a>
    
    <!-- TOMBOL PRINT/CETAK -->
    <a href="cetak3.php" target="_blank" class="btn btn-primary ml-2">Cetak</a>
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
        <th>ID Mapel</th>
        <th>Guru Pengajar</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Hari</th>
        <th>OPSI</th>
      </tr>

      <?php
include 'koneksi.php';

// Proses pencarian
if (isset($_GET['cari'])) {
  $cari = $_GET['cari'];
  $hariFilter = isset($_GET['hariFilter']) ? $_GET['hariFilter'] : '';

  if ($hariFilter) {
    $data = mysqli_query($koneksi, "SELECT * FROM pembelajaran WHERE (ID_Mapel LIKE '%$cari%' OR Guru_Pengajar LIKE '%$cari%' OR Jam_Mulai LIKE '%$cari%' OR Jam_Selesai LIKE '%$cari%' OR Hari LIKE '%$cari%') AND Hari = '$hariFilter' ORDER BY hari DESC");
  } else {
    $data = mysqli_query($koneksi, "SELECT * FROM pembelajaran WHERE ID_Mapel LIKE '%$cari%' OR Guru_Pengajar LIKE '%$cari%' OR Jam_Mulai LIKE '%$cari%' OR Jam_Selesai LIKE '%$cari%' OR Hari LIKE '%$cari%' ORDER BY hari DESC");
  }
} else {
  $hariFilter = isset($_GET['hariFilter']) ? $_GET['hariFilter'] : '';

  if ($hariFilter) {
    $data = mysqli_query($koneksi, "SELECT * FROM pembelajaran WHERE Hari = '$hariFilter' ORDER BY hari DESC");
  } else {
    $data = mysqli_query($koneksi, "SELECT * FROM pembelajaran  ORDER BY hari DESC");
  }
}
    

      $no = 1;
      while ($d = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['ID_Mapel']; ?></td>
          <td><?php echo $d['Guru_Pengajar']; ?></td>
          <td><?php echo $d['Jam_Mulai']; ?></td>
          <td><?php echo $d['Jam_Selesai']; ?></td>
          <td><?php echo $d['Hari']; ?></td>
          
          <td>
            <a href="edit3.php?id=<?php echo $d['ID_Mapel']; ?>" class="btn btn-success btn-sm mr-2">UBAH</a>
            <a href="hapus3.php?id_mapel=<?php echo $d['ID_Mapel']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">HAPUS</a>
          </td>
        </tr>
      <?php 
      }
      ?>
    </table>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>
