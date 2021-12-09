<!DOCTYPE html>
<html>
<head>
	<title>MIBZ Store</title>
</head>

<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/header.css">
<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

<body>
        <?php 

          session_start();
          if ($_SESSION['status']!="login") {
            header("location:login.php");
          }

          include 'koneksi.php';
          $halaman = 10;
          $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
          $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
          $result = mysqli_query($koneksi,"select *from barang");
          $total = mysqli_num_rows($result);
          $pages = ceil($total/$halaman);

        ?>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php">MIBZ Store</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link" href="tambah.php">+Tambah Data</a>
            </div>
          </div>
      </nav>


	<div class="row content">

    <div class="col-md-2">
      
      <div class="tombol">
        <nav class="nav flex-column nav-pills">
          
            
            <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Dashboard</a>
            <a class="nav-link active" href="table.php"><i class="fa fa-table"></i> Tabel</a>
            <a class="nav-link" href="search.php"><i class="fa fa-search"></i> Cari Barang</a>
            <a class="nav-link" href="logout.php" onclick=" return confirm('Anda Yakin ingin Logout ?')"><i class="fas fa-sign-out-alt"></i> Logout</a>

          
        </nav>
      </div>      

    </div>

    
    <div class="col-md-10">
      
      <div class="jumbotron">
        <div class="row">
          <div class="col-md-9">
            
            <div class="pesan">

          <?php

                  if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "SimpanSuccess") {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   Data Berhasil Disimpan
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }elseif ($_GET['pesan'] == "SimpanGagal") {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Data Gagal Disimpan
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }elseif ($_GET['pesan'] == "UpdateSuccess") {
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                   Data Berhasil Diupdate
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }elseif ($_GET['pesan'] == "UpdateGagal") {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Data Gagal Diupdate
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }elseif($_GET['pesan'] == "DeleteSuccess"){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Data Berhasil Dihapus
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }elseif($_GET['pesan'] == "DeleteGagal"){
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   Data Gagal Dihapus
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php
                    }
                  }

                ?>

        </div>

          </div>
          <div class="col-md-2 d-flex ml-auto p-2 bd-highlight">
            <div class="container">
              <a href="lap_barang.php" class="btn btn-light"><i class="fas fa-print"></i> Print</a>
            </div>
          </div>
        </div>
              
        <div class="tabel">

          <table class="table table-hover text-center">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Kode</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Satuan</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <?php

                 
                  $no = $mulai+1;
                  $data = mysqli_query($koneksi,"select * from barang limit $mulai, $halaman");
                  while ($barang = mysqli_fetch_array($data)) {
                  ?>
                  <tbody>
                    <tr>
                      <th scope="row"><?php echo $no++ ?></th>
                      <td><?php echo $barang['kode'];?></td>
                      <td><?php echo $barang['nama'];?></td>
                      <td><?php echo $barang['satuan']; ?></td>
                      <td>Rp. <?php echo number_format($barang['harga'])?>,-</td>
                      <td><?php echo $barang['stok'];?></td>
                      <td><a href="edit.php?id=<?php echo $barang['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil-alt"></i> | Edit</a> <a onclick ="return confirm('Anda yakin ingin menghapus data ini ?') " href="hapus.php?id=<?php echo $barang['id'];?>" class="btn btn-danger"><i class="far fa-trash-alt"></i> | Hapus</a></td>
                    </tr>
                    <?php
                    }

                    ?>
                  </tbody>
                </table>

        </div> 
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <?php

                for ($i=1; $i <=$pages ; $i++) { 
                ?>
            <li class="page-item">
              
              <a class="page-link" href="?halaman=<?php echo $i?>"><?php echo $i; ?></a>
              <?php
                }

               ?>
            </li>
          </ul>
        </nav>       

      </div>

    </div>      

        
  

	

<script src="assets/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>