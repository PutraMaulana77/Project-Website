<?php
// memanggil library FPDF
require('../PrintPHP/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

// Tambahkan baris kosong
$pdf->Cell(10,10,'',0,1);

// Tampilkan logo sekolah (gantilah 'path/to/logo.png' dengan path sesuai dengan logo sekolah Anda)
$pdf->Image('iconSekul.png', 80, 10, 40);
 
// Tambahkan spasi setelah menampilkan logo
$pdf->Ln(10);

$pdf->SetFont('Times','B',20);
$pdf->Cell(180,35,'Data Pembelajaran',0,1,'C');
 
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(20,7,'ID Mapel' ,1,0,'C');
$pdf->Cell(75,7,'Guru Pengajar',1,0,'C');
$pdf->Cell(20,7,'Jam Mulai',1,0,'C');
$pdf->Cell(20,7,'Jam Selesai',1,0,'C');
$pdf->Cell(20,7,'Hari' ,1,0,'C');
 
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM pembelajaran");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(20,6, $d['ID_Mapel'],1,0);
  $pdf->Cell(75,6, $d['Guru_Pengajar'],1,0);  
  $pdf->Cell(20,6, $d['Jam_Mulai'],1,0);
  $pdf->Cell(20,6, $d['Jam_Selesai'],1,0);
  $pdf->Cell(20,6, $d['Hari'],1,1);
}
 
$pdf->Output();
 
?>