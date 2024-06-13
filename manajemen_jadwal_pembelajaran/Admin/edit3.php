<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Pembelajaran</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<?php
				include 'koneksi.php';

				$id = $_GET['id'];
				$data = mysqli_query($koneksi, "SELECT * FROM pembelajaran where ID_Mapel='$id'");

				while($d = mysqli_fetch_array($data)){
				?>
				<h2 class="text-center">Edit Data Pembelajaran</h2>
				<form method="post" action="edit_aksi3.php">
					<div class="form-group">
						<label for="ID_Mapel">ID Mapel</label>
						<input type="hidden" name="ID_Mapel" value="<?php echo $d['ID_Mapel']; ?>">
						<input type="text" class="form-control" id="ID_Mapel" value="<?php echo $d['ID_Mapel']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="Guru_Pengajar">Guru Pengajar</label>
						<input type="text" class="form-control" id="Guru_Pengajar" name="Guru_Pengajar" value="<?php echo $d['Guru_Pengajar']; ?>">
					</div>
					<div class="form-group">
						<label for="Jam_Mulai">Jam Mulai</label>
						<input type="text" class="form-control" id="Jam_Mulai" name="Jam_Mulai" value="<?php echo $d['Jam_Mulai']; ?>">
					</div>
					<div class="form-group">
						<label for="Jam_Selesai">Jam Selesai</label>
						<input type="text" class="form-control" id="Jam_Selesai" name="Jam_Selesai" value="<?php echo $d['Jam_Selesai']; ?>">
					</div>
					<div class="form-group">
						<label for="Hari">Hari</label>
						<input type="text" class="form-control" id="Hari" name="Hari" value="<?php echo $d['Hari']; ?>">
					</div>
					


					<div class="text-center">
						<button type="submit" class="btn btn-primary mr-2">SIMPAN</button>
						<a href="Datapemb.php" class="btn btn-secondary">Kembali</a>
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
            document.getElementById("Guru_Pengajar").value = "";
            document.getElementById("Jam_Mulai").value = "";
            document.getElementById("Jam_Selesai").value = "";
			document.getElementById("Hari").value = "";
        }
    </script>

</body>

</html>
</body>
</html>
