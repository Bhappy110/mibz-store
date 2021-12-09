<?php

	include 'koneksi.php';

	$id = $_GET['id'];

	$sql = mysqli_query($koneksi, "delete from barang where id = '$id'");

	if ($sql) {
		
		header("location:table.php?pesan=DeleteSuccess");

	}else{
		header("location:table.php?pesan=DeleteGagal");
	}

?>