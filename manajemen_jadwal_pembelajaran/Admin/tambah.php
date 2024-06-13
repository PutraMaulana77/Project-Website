<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Guru</title>
	<!-- Tautan Bootstrap dari CDN -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>



<div class="container mt-5">
    <h2 class="text-center">INPUT DATA GURU</h2>
    <form method="post" action="tambah_aksi.php">
        <div class="mb-3">
            <label for="NUPTK" class="form-label">NUPTK</label>
            <input type="text" class="form-control" id="NUPTK" name="NUPTK">
        </div>
        <div class="mb-3">
            <label for="Nama_Guru" class="form-label">Nama Guru</label>
            <input type="text" class="form-control" name="Nama_Guru" id="Nama_Guru" autocomplete="off">
        </div>
        
        <div class="mb-3">
            <label for="Bidang_Mengajar" class="form-label">Bidang Mengajar</label>
            <input type="text" class="form-control" id="Bidang_Mengajar" name="Bidang_Mengajar">
        </div>
        <div class="mb-3">
            <label for="Kontak" class="form-label">Kontak</label>
            <input type="text" class="form-control" id="Kontak" name="Kontak">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="Dataguru.php" class="btn btn-secondary">Kembali</a>
          
        </div>
    </form>
</div>



	<!-- Tambahkan script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
