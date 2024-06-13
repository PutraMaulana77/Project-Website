<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mapel</title>
	<!-- Tautan Bootstrap dari CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>



<div class="container mt-5">
    <h2 class="text-center">INPUT DATA MAPEL</h2>
    <form method="post" action="tambah_aksi2.php">
        <div class="mb-3">
        
        <div class="mb-3">
            <label for="Tingkat_Kelas" class="form-label">Tingkat Kelas</label>
            <input type="text" class="form-control" id="Tingkat_Kelas" name="Tingkat_Kelas">
        </div>


            <label for="ID_Mapel" class="form-label">ID Mapel</label>
            <input type="text" class="form-control" id="ID_Mapel" name="ID_Mapel">
        </div>

        <div class="mb-3">
            <label for="Mata_Pelajaran" class="form-label">Mata Pelajaran</label>
            <select class="form-select" name="Mata_Pelajaran">   
            <option selected>-  - </option>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from guru");
            while ($d = mysqli_fetch_array($data)) {
               ?>
               <option value="<?php echo $d['Bidang_Mengajar']; ?>">
                  <?php echo $d['Bidang_Mengajar']; ?>
               </option>
               <?php
            }
            ?>
             </select>

        </div>

        <div class="mb-3">
            <label for="No_Ruangan" class="form-label">No Ruangan</label>
            <input type="text" class="form-control" id="No_Ruangan" name="No_Ruangan">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="Datamapel.php" class="btn btn-secondary">Kembali</a>
          
        </div>
    </form>
</div>

	<!-- Tambahkan script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
