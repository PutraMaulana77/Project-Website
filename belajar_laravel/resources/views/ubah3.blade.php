<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data Pembelajaran</title>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<h2 class="text-center">Ubah Data Pembelajaran</h2>
				@foreach($pembelajaran as $p)
				<form action="/pembelajaran/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->ID_Mapel }}"> <br />

					<div class="form-group">
						<label for="ID_Mapel">ID Mapel</label>
						<input type="text" class="form-control" id="ID_Mapel" name="ID_Mapel" value="{{ $p->ID_Mapel }}" readonly>
					</div>
					<div class="form-group">
						<label for="Guru_Pengajar">Guru Pengajar</label>
						<input type="text" class="form-control" id="Guru_Pengajar" name="Guru_Pengajar" value="{{ $p->Guru_Pengajar }}" required>
					</div>
					<div class="form-group">
						<label for="Jam_Mulai">Jam Mulai</label>
						<input type="time" class="form-control" id="Jam_Mulai" name="Jam_Mulai" value="{{ $p->Jam_Mulai }}" required>
					</div>
					<div class="form-group">
						<label for="Jam_Selesai">Jam Selesai</label>
						<input type="time" class="form-control" id="Jam_Selesai" name="Jam_Selesai" value="{{ $p->Jam_Selesai }}" required>
					</div>
					<div class="form-group">
						<label for="Hari">Hari</label>
						<input type="text" class="form-control" id="Hari" name="Hari" value="{{ $p->Hari }}" required>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary mr-2" onclick="return confirm('Anda yakin akan mengubah data ini?')">Simpan</button>
						<a href="{{ url('pembelajaran') }}" class="btn btn-secondary">Kembali</a>
						<button type="button" class="btn btn-danger ml-2" onclick="clearForm()">Bersihkan</button>
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>

	<!-- Bootstrap JS and dependencies -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- JavaScript to clear the form -->
	<script>
		function clearForm() {
			document.getElementById("ID_Mapel").value = "";
			document.getElementById("Guru_Pengajar").value = "";
			document.getElementById("Jam_Mulai").value = "";
			document.getElementById("Jam_Selesai").value = "";
			document.getElementById("Hari").value = "";
		}
	</script>
</body>

</html>