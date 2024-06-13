<?php
include 'koneksi.php';

$NUPTK = $_POST['NUPTK'];
$Nama_Guru = $_POST['Nama_Guru'];
$Bidang_Mengajar = $_POST['Bidang_Mengajar'];
$Kontak = $_POST['Kontak'];

$query = "UPDATE guru SET Nama_Guru='$Nama_Guru', Bidang_Mengajar='$Bidang_Mengajar', Kontak='$Kontak' WHERE NUPTK='$NUPTK'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: Dataguru.php"); // Ganti ini dengan halaman utama Anda
} else {
    echo "Gagal mengupdate data guru.";
}

mysqli_close($koneksi);
?>
