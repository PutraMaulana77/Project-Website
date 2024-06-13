<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nuptk = $_GET['nuptk'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"DELETE  FROM guru WHERE nuptk='$nuptk'");
 
// mengalihkan halaman kembali ke index.php
header("location:Dataguru.php");
 
?>