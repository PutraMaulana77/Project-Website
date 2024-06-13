<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data yang diinput oleh user
$tingkat_kelas = $_POST['Tingkat_Kelas'];
$id_mapel = $_POST['ID_Mapel'];
$mata_pelajaran = $_POST['Mata_Pelajaran'];

$no_ruangan = $_POST['No_Ruangan'];

// Validasi data
if (empty($id_mapel)) {
    echo "ID Mapel belum diisi gann!!<br>";
    echo "<a href='tambah2.php'>Kembali</a>";
    exit;
} elseif (empty($mata_pelajaran)) {
    echo "Mapel belum diisi gan!!<br>";
    echo "<a href='tambah2.php'>Kembali</a>";
    exit;
} elseif (empty($tingkat_kelas)) {
    echo "Tingkat Kelas belum diisi gan!!<br>";
    echo "<a href='tambah2.php'>Kembali</a>";
    exit;
} elseif (empty($no_ruangan)) {
    echo "No Ruangan belum diisi gan!!<br>";
    echo "<a href='tambah2.php'>Kembali</a>";
    exit;
}

// Query untuk menambahkan data
$query = "INSERT INTO mapel (Tingkat_Kelas, ID_Mapel, Mata_Pelajaran, No_Ruangan) VALUES ('$tingkat_kelas', '$id_mapel', '$mata_pelajaran', '$no_ruangan')";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil atau tidak
if ($result) {
    echo "Data berhasil ditambahkan!<br>";
    echo "<a href='Datamapel.php'>Lihat Data</a>";
} else {
    echo "Data gagal ditambahkan!<br>";
    echo "<a href='tambah2.php'>Kembali</a>";
}
?>