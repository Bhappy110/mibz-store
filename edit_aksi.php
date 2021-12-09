<?php

	include 'koneksi.php';

	$id = $_POST['id'];
	$kode = $_POST['kode'];
	$nama = $_POST['nama'];
	$satuan = $_POST['satuan'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	

	$sql = mysqli_query($koneksi, "update barang set kode = '$kode', nama = '$nama', satuan = '$satuan', harga = '$harga', stok = '$stok' where id = '$id'");

	if ($sql) {
		
		header("location:table.php?pesan=UpdateSuccess");

	}else{
		header("location:table.php?pesan=UpdateGagal");
	}

?>