<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mapel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h2 class="text-center">Tambah Data Mapel</h2>
                <form action="/mapel/store" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="Tingkat_Kelas">Tingkat Kelas</label>
                        <input type="text" class="form-control" id="Tingkat_Kelas" name="Tingkat_Kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="ID_Mapel">ID Mapel</label>
                        <input type="text" class="form-control" id="ID_Mapel" name="ID_Mapel" required>
                    </div>
                    <div class="form-group">
                        <label for="Bidang_Mengajar">Mata Pelajaran</label>
                        <select name="Bidang_Mengajar" id="Bidang_Mengajar" class="form-control" required>
                            @foreach($Bidang_Mengajar as $p)
                            <option value="{{$p->Bidang_Mengajar}}">{{$p->Bidang_Mengajar}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="No_Ruangan">No Ruangan</label>
                        <input type="text" class="form-control" id="No_Ruangan" name="No_Ruangan" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                        <a href="/mapel" class="btn btn-secondary">Kembali</a>
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
            document.getElementById("Tingkat_Kelas").value = "";
            document.getElementById("ID_Mapel").value = "";
            document.getElementById("Mata_Pelajaran").value = "";
            document.getElementById("No_Ruangan").value = "";
        }
    </script>
</body>

</html>