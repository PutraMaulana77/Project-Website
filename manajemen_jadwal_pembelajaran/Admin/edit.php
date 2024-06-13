<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Guru</title>
    <!-- Tambahkan link stylesheet Bootstrap untuk desain tampilan -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Tambahkan font dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <?php
                include 'koneksi.php';

                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM guru where NUPTK='$id'");

                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <h2 class="text-center">Edit Data Guru</h2>
                    <form method="post" action="edit_aksi.php">
                        <input type="hidden" name="NUPTK" value="<?php echo $d['NUPTK']; ?>">
                        <div class="form-group">
                            <label for="NUPTK">NUPTK</label>
                            <input type="text" class="form-control" id="NUPTK" value="<?php echo $d['NUPTK']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="Nama_Guru">Nama Guru</label>
                            <input type="text" class="form-control" id="Nama_Guru" name="Nama_Guru" value="<?php echo $d['Nama_Guru']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Bidang_Mengajar">Bidang Mengajar</label>
                            <input type="text" class="form-control" id="Bidang_Mengajar" name="Bidang_Mengajar" value="<?php echo $d['Bidang_Mengajar']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Kontak">Kontak</label>
                            <input type="text" class="form-control" id="Kontak" name="Kontak" value="<?php echo $d['Kontak']; ?>">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="Dataguru.php" class="btn btn-secondary">Kembali</a>
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
            document.getElementById("Nama_Guru").value = "";
            document.getElementById("Bidang_Mengajar").value = "";
            document.getElementById("Kontak").value = "";
        }
    </script>

</body>

</html>
