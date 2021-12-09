<!DOCTYPE html>
<html>
      <head>
      	<title>MIBZ Store</title>
      </head>

      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/header.css">
      <link rel="stylesheet" type="text/css" href="assets/css/search.css">
      <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

      <body>
        <?php 

          session_start();
          if ($_SESSION['status']!="login") {
            header("location:login.php");
          }

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
                  <a class="nav-link" href="table.php"><i class="fa fa-table"></i> Tabel</a>
                  <a class="nav-link active" href="search.php"><i class="fa fa-search"></i> Cari Barang</a>
                  <a class="nav-link" href="logout.php" onclick=" return confirm('Anda Yakin ingin Logout ?')"><i class="fas fa-sign-out-alt"></i> Logout</a>

                
              </nav>
            </div>      

          </div>          
          
          <div class="col-md-10">
            <div class="jumbotron">
              <h3><i class="fas fa-briefcase"></i> Cari Barang</h3>
              <div class="row search-engine">

                <div class="col-md-4">
                  
                  <form action="search.php" method="GET">
                    
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Cari Barang" aria-label="Username" aria-describedby="basic-addon1" name="cari">
                      <div class="input-group-append">
                        <input type="submit" value="Cari" class="btn btn-outline-secondary" id="button-addon2">
                      </div>
                    </div>

                  </form>
                  <?php

                    include 'koneksi.php';

                    if (isset($_GET['cari'])) {
                       $cari = $_GET['cari'];
                  ?>
                  <p>Hasil Pencarian : <?php echo $cari ?></p>
                  <?php
                    }

                  ?>
                </div>
                <div class="col-md-12">
                  
                  <?php

                    if (isset($_GET['cari'])) {
                      $cari = $_GET['cari'];
                      $data = mysqli_query($koneksi, "select *from barang where nama like '%".$cari."%'");
                      $no = 1;
                      
                  ?>
                    <div class="row">
                      <?php
                        while ($barang = mysqli_fetch_array($data)) {
                      ?>
                      <div class="col-md-3">
                        <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-5">
                              <p><?php echo $no++ ?></p>
                            </div>
                            <div class="col-md-7">
                              <a href="edit.php?id=<?php echo $barang['id'];?>" class="badge badge-primary">detail</a> 
                              <a onclick="return confirm('Anda yakin ingin menghapus data ini ?') " href="hapus.php?id=<?php echo $barang['id'];?>" class="badge badge-danger">delete</a>
                            </div>
                          </div>
                          <p>Kode : <?php echo $barang['kode'];?></p>
                          <p>Nama : <?php echo $barang['nama'];?></p>
                          <p>Satuan : <?php echo $barang['satuan'];?></p>
                          <p>Harga : <?php echo $barang['harga']; ?></p>
                          <p>Stok : <?php echo $barang['stok'];?></p>
                          
                        </div>
                        </div>

                      </div>
                      <?php
                      }
                      ?>
                    </div>
                  <?php
                    }else{

                    ?>
                    <div class="barang-kosong text-center">
                      <p><i class="fa fa-search"></i></p>
                      <br>
                      <p class="keterangan">Silahkan Cari Barang pada Kolom pencarian</p>
                    </div>
                  <?php  
                    }

                  ?>

                </div>

              </div>
      
            </div>
          </div>          
        </div>

      <script src="assets/js/jquery.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>