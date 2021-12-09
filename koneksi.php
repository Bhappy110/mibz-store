<?php

$koneksi = mysqli_connect("localhost","root","","penjualan_db");

if (mysqli_connect_errno()) {
	echo "koneksi ke database gagal" . mysqli_connect_error();
}

?>