<?php
include 'koneksi.php';

$ID_Mapel = $_POST['ID_Mapel'];
$Guru_Pengajar = $_POST['Guru_Pengajar'];
$Jam_Mulai = $_POST['Jam_Mulai'];
$Jam_Selesai= $_POST['Jam_Selesai'];
$Hari= $_POST['Hari'];


$query = "UPDATE pembelajaran SET Guru_Pengajar='$Guru_Pengajar', Jam_Mulai='$Jam_Mulai', Jam_Selesai='$Jam_Selesai', Hari='$Hari' WHERE ID_Mapel='$ID_Mapel'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: Datapemb.php"); // Ganti ini dengan halaman utama Anda
} else {
    echo "Gagal mengupdate data pembelajaran.";
}

mysqli_close($koneksi);
?>
