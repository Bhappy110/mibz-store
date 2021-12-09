<?php

	include 'koneksi.php';

	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	$sql = mysqli_query($koneksi, "insert into barang (id, kode, nama, satuan,harga,stok) values ('', '$kode', '$nama','$satuan','$harga','$stok' ) ");

	if ($sql) {
		
		header("location:table.php?pesan=SimpanSuccess");
	}else {
		header("location:table.php?pesan=SimpanGagal");
	}


?>