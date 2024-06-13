<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mapel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<?php
				include 'koneksi.php';

				$id = $_GET['id'];
				$data = mysqli_query($koneksi, "SELECT * FROM mapel where ID_Mapel='$id'");

				while($d = mysqli_fetch_array($data)){
				?>
				<h2 class="text-center">Edit Data Mata Pelajaran</h2>
				<form method="post" action="edit_aksi2.php">
					
					<div class="form-group">
						<label for="Tingkat_Kelas">Tingkat Kelas</label>
						<input type="text" class="form-control" id="Tingkat_Kelas" name="Tingkat_Kelas" value="<?php echo $d['Tingkat_Kelas']; ?>">
					</div>

					<div class="form-group">
						<label for="ID_Mapel">ID Mapel</label>
						<input type="hidden" name="ID_Mapel" value="<?php echo $d['ID_Mapel']; ?>">
						<input type="text" class="form-control" id="ID_Mapel" value="<?php echo $d['ID_Mapel']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="Mata_Pelajaran">Mata Pelajaran</label>
						<input type="text" class="form-control" id="Mata_Pelajaran" name="Mata_Pelajaran" value="<?php echo $d['Mata_Pelajaran']; ?>">
					</div>
					
					<div class="form-group">
						<label for="No_Ruangan">No Ruangan</label>
						<input type="text" class="form-control" id="No_Ruangan" name="No_Ruangan" value="<?php echo $d['No_Ruangan']; ?>">
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary mr-2">SIMPAN</button>
						<a href="Datamapel.php" class="btn btn-secondary">Kembali</a>
						<button type="button" class="btn btn-danger ml-2" onclick="clearForm()">Bersihkan</button>
					</div>
				</form>
				<?php
				}
				?>
			</div>
		</div>
	</div>


	<!-- Tambahkan script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Tambahkan script JavaScript untuk membersihkan formulir -->
    <script>
        function clearForm() {
            document.getElementById("Mata_Pelajaran").value = "";
            document.getElementById("Tingkat_Kelas").value = "";
            document.getElementById("No_Ruangan").value = "";
        }
    </script>

</body>

</html>
</body>
</html>
