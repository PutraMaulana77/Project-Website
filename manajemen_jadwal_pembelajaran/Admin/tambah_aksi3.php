<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data yang diinput oleh user
$id_mapel = $_POST['ID_Mapel'];
$guru_pengajar = $_POST['Guru_Pengajar'];
$jam_mulai = $_POST['Jam_Mulai'];
$jam_selesai = $_POST['Jam_Selesai'];
$hari = $_POST['Hari'];




// Validasi data
if (empty($id_mapel)) {
    echo "ID Mapel belum diisi gann!!<br>";
    echo "<a href='tambah3.php'>Kembali</a>";
    exit;
} elseif (empty($guru_pengajar)) {
    echo "Guru Pengajar belum diisi gan!!<br>";
    echo "<a href='tambah3.php'>Kembali</a>";
    exit;
} elseif (empty($jam_mulai)) {
    echo "Jam mulai Kelas belum diisi gan!!<br>";
    echo "<a href='tambah3.php'>Kembali</a>";
    exit;
} elseif (empty($jam_selesai)) {
    echo "Jam selesai belum diisi gan!!<br>";
    echo "<a href='tambah3.php'>Kembali</a>";
    exit;
}elseif (empty($hari )) {
    echo "Hari belum diisi gan!!<br>";
    echo "<a href='tambah3.php'>Kembali</a>";
    exit;
}


// Query untuk menambahkan data
$query = "INSERT INTO pembelajaran (ID_Mapel, Guru_Pengajar, Jam_Mulai, Jam_Selesai, Hari) VALUES ('$id_mapel', '$guru_pengajar', '$jam_mulai', '$jam_selesai', '$hari')";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil atau tidak
if ($result) {
    echo "Data berhasil ditambahkan!<br>";
    echo "<a href='Datapemb.php'>Lihat Data</a>";
} else {
    echo "Data gagal ditambahkan!<br>";
    echo "<a href='tambah3.php'>Kembali</a>";
}
?>