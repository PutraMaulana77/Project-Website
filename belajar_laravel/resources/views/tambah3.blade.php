<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pembelajaran</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="text-center">Tambah Data Pembelajaran</h2>
                <form action="/pembelajaran/store" method="post">
                    @csrf

                    <div class="form-group">
                <label for="ID_Mapel">ID Mapel</label>
                <select name="ID_Mapel" id="ID_Mapel" class="form-control" required>
                    @foreach($ID_Mapel as $p)
                    <option value="{{$p->ID_Mapel}}">{{$p->ID_Mapel}}</option>
                    @endforeach
                </select>
            </div>
                    <div class="form-group">
                        <label for="Guru_Pengajar">Guru Pengajar</label>
                        <input type="text" class="form-control" id="Guru_Pengajar" name="Guru_Pengajar" required>
                    </div>
                    <div class="form-group">
                        <label for="Jam_Mulai">Jam Mulai</label>
                        <input type="time" class="form-control" id="Jam_Mulai" name="Jam_Mulai" required>
                    </div>
                    <div class="form-group">
                        <label for="Jam_Selesai">Jam Selesai</label>
                        <input type="time" class="form-control" id="Jam_Selesai" name="Jam_Selesai" required>
                    </div>
                    <div class="form-group">
                        <label for="Hari">Hari</label>
                        <input type="text" class="form-control" id="Hari" name="Hari" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                        <a href="/pembelajaran" class="btn btn-secondary">Kembali</a>
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
            document.getElementById("ID_Mapel").value = "";
            document.getElementById("Guru_Pengajar").value = "";
            document.getElementById("Jam_Mulai").value = "";
            document.getElementById("Jam_Selesai").value = "";
            document.getElementById("Hari").value = "";
        }
    </script>
</body>

</html>
