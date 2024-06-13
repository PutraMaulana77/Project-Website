<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="text-center">Tambah Data Guru</h2>
                <form action="/guru/store" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="NUPTK">NUPTK</label>
                        <input type="text" class="form-control" id="NUPTK" name="NUPTK" required>
                    </div>
                    <div class="form-group">
                        <label for="Nama_Guru">Nama Guru</label>
                        <input type="text" class="form-control" id="Nama_Guru" name="Nama_Guru" required>
                    </div>
                    <div class="form-group">
                        <label for="Bidang_Mengajar">Bidang Mengajar</label>
                        <input type="text" class="form-control" id="Bidang_Mengajar" name="Bidang_Mengajar" required>
                    </div>
                    <div class="form-group">
                        <label for="Kontak">Kontak</label>
                        <input type="text" class="form-control" id="Kontak" name="Kontak" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                        <a href="/guru" class="btn btn-secondary">Kembali</a>
                        <button type="button" class="btn btn-danger ml-2" onclick="clearForm()">Bersihkan</button>
                    </div>
                </form>
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
            document.getElementById("NUPTK").value = "";
            document.getElementById("Nama_Guru").value = "";
            document.getElementById("Bidang_Mengajar").value = "";
            document.getElementById("Kontak").value = "";
        }
    </script>
</body>

</html>
