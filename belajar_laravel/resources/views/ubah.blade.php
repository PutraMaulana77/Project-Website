<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ubah Data Guru</title>
	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<h2 class="text-center">Ubah Data Guru</h2>
				@foreach($guru as $p)
				<form action="/guru/update" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{ $p->NUPTK }}">

					<div class="form-group">
						<label for="NUPTK">NUPTK</label>
						<input type="text" class="form-control" id="NUPTK" name="NUPTK" value="{{ $p->NUPTK }}" readonly>
					</div>
					<div class="form-group">
						<label for="Nama_Guru">Nama Guru</label>
						<input type="text" class="form-control" id="Nama_Guru" name="Nama_Guru" value="{{ $p->Nama_Guru }}" required>
					</div>
					<div class="form-group">
						<label for="Bidang_Mengajar">Bidang Mengajar</label>
						<input type="text" class="form-control" id="Bidang_Mengajar" name="Bidang_Mengajar" value="{{ $p->Bidang_Mengajar }}" required>
					</div>
					<div class="form-group">
						<label for="Kontak">Kontak</label>
						<input type="text" class="form-control" id="Kontak" name="Kontak" value="{{ $p->Kontak }}" required>
					</div>
					<div class="text-center">
					<button type="submit" class="btn btn-primary mr-2" onclick="return confirm('Anda yakin akan mengubah data ini?')">Simpan</button>
						<a href="{{ url('guru') }}" class="btn btn-secondary">Kembali</a>
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
			document.getElementById("Nama_Guru").value = "";
			document.getElementById("Bidang_Mengajar").value = "";
			document.getElementById("Kontak").value = "";
		}
	</script>
</body>

</html>