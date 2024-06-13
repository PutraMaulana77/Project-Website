<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pembelajaran</title>
	<!-- Tautan Bootstrap dari CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>



<div class="container mt-5">
    <h2 class="text-center">INPUT DATA PEMBELAJARAN</h2>
    <form method="post" action="tambah_aksi3.php">
        
        <div class="mb-3">
            <label for="ID_Mapel" class="form-label">ID Mapel</label>

            <select class="form-select" name="ID_Mapel">
            <option selected>-  - </option>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from mapel");
            while ($d = mysqli_fetch_array($data)) {
               ?>
               <option value="<?php echo $d['ID_Mapel']; ?>">
                  <?php echo $d['ID_Mapel']; ?>
               </option>
               <?php
            }
            ?>
             </select>
        </div>

        <div class="mb-3">
            <label for="Guru_Pengajar" class="form-label">Guru Pengajar</label>
            <select class="form-select" name="Guru_Pengajar">
            <option selected>-  - </option>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from guru");
            while ($d = mysqli_fetch_array($data)) {
               ?>
               <option value="<?php echo $d['Nama_Guru']; ?>">
                  <?php echo $d['Nama_Guru']; ?>
               </option>
               <?php
            }
            ?>
             </select>
      </div>

        <div class="mb-3">
            <label for="Jam_Mulai" class="form-label">Jam Mulai</label>
            <input type="text" class="form-control" id="Jam_Mulai" name="Jam_Mulai">
        </div>
        <div class="mb-3">
            <label for="Jam_Selesai" class="form-label">Jam Selesai</label>
            <input type="text" class="form-control" id="Jam_Selesai" name="Jam_Selesai">
        </div>
        <div class="mb-3">
            <label for="Hari" class="form-label">Hari</label>
            <input type="text" class="form-control" id="Hari" name="Hari">
        </div>
     
       <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="Datapemb.php" class="btn btn-secondary">Kembali</a>
          
        </div>
    </form>
</div>

	<!-- Tambahkan script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
