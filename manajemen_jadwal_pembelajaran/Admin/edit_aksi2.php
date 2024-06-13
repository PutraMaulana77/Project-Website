<?php
include 'koneksi.php';

$Tingkat_Kelas = $_POST['Tingkat_Kelas'];
$ID_Mapel = $_POST['ID_Mapel'];
$Mata_Pelajaran = $_POST['Mata_Pelajaran'];
$No_Ruangan = $_POST['No_Ruangan'];

$query = "UPDATE mapel SET Tingkat_Kelas='$Tingkat_Kelas', Mata_Pelajaran='$Mata_Pelajaran', No_Ruangan='$No_Ruangan' WHERE ID_Mapel='$ID_Mapel'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: Datamapel.php"); // Ganti ini dengan halaman utama Anda
} else {
    echo "Gagal mengupdate data mapel.";
}

mysqli_close($koneksi);
?>
