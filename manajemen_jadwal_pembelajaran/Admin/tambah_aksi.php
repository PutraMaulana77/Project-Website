<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data yang diinput oleh user
$nuptk = $_POST['NUPTK'];
$nama_guru = $_POST['Nama_Guru'];
$bidang_mengajar = $_POST['Bidang_Mengajar'];
$kontak = $_POST['Kontak'];

// Validasi data
if (empty($nuptk)) {
    echo "NUPTK belum diisi gan!!<br>";
    echo "<a href='tambah.php'>Kembali</a>";
    exit;
} elseif (empty($nama_guru)) {
    echo "Nama belum diisi gan!!<br>";
    echo "<a href='tambah.php'>Kembali</a>";
    exit;
} elseif (empty($bidang_mengajar)) {
    echo "Bidang belum diisi gan!!<br>";
    echo "<a href='tambah.php'>Kembali</a>";
    exit;
} elseif (empty($kontak)) {
    echo "Kontak belum diisi gan!!<br>";
    echo "<a href='tambah.php'>Kembali</a>";
    exit;
}


// Query untuk menambahkan data
$query = "INSERT INTO guru (NUPTK, Nama_Guru, Bidang_Mengajar, Kontak) VALUES ('$nuptk', '$nama_guru', '$bidang_mengajar', '$kontak')";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil atau tidak
if ($result) {
    echo "Data berhasil ditambahkan!<br>";
    echo "<a href='Dataguru.php'>Lihat Data</a>";
} else {
    echo "Data gagal ditambahkan!<br>";
    echo "<a href='tambah.php'>Kembali</a>";
}
?>