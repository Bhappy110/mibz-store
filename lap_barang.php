<?php

include 'koneksi.php';
require('assets/fpdf17/fpdf.php');

$pdf = new FPDF("L","cm","A4");
$pdf->AddPage();
$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->SetFont('Times','B',11);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'KIOS MIBO', 0, 'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telepon : +62XXXXXXX',0,'L');
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Jalan Johar No 30',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.MibStore.com email : mibstore@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0.1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Barang",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : " .date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Kode', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'Nama Produk', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Satuan', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Stok', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query = mysqli_query($koneksi,"select *from barang");
while ($lihat=mysqli_fetch_array($query)) {
	$pdf->Cell(1, 0.8, $no, 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['kode'],1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nama'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['satuan'],1, 0, 'C');
	$pdf->Cell(4, 0.8, "Rp, " .number_format($lihat['harga']). " ,-",1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['stok'],1, 1, 'C');

	$no++;
}

$pdf->Output("laporan_buku.pdf","I");

?>