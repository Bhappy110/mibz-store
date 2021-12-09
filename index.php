<!DOCTYPE html>
<html>
      <head>
      	<title>MIBZ Store</title>
      </head>

      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/header.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
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
                
                  
                  <a class="nav-link active" href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                  <a class="nav-link" href="table.php"><i class="fa fa-table"></i> Tabel</a>
                  <a class="nav-link" href="search.php"><i class="fa fa-search"></i> Cari Barang</a>
                  <a class="nav-link" href="logout.php" onclick=" return confirm('Anda Yakin ingin Logout ?')"><i class="fas fa-sign-out-alt"></i> Logout</a>

                
              </nav>
            </div>      

          </div>          
          
          <div class="col-md-10">
            
            <div class="jumbotron">

                  <div class="row">
                    <div class="col-md-12 header">
                      <div class="row">
                        <div class="col-md-3">
                          
                          <div class="dashboard">

                            <div class="row">

                              <div class="col-md-3 icon1">
                                <div class="icon">
                                  <i class="fa fa-user"></i>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <p class="text">Profile Admin</p>
                              </div>

                            </div>

                          </div>
                        </div>
                        <div class="col-md-3">
                          
                          <div class="dashboard">

                            <div class="row">

                              <div class="col-md-3 icon1">
                                <div class="icon">
                                  <i class="fa fa-briefcase"></i>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <p class="text">Jumlah Record : 
                                <?php 
                                  include 'koneksi.php';
                                  $data = mysqli_query($koneksi, "select *from barang");
                                  $jumlah_data = mysqli_num_rows($data);
                                ?>

                                <?php echo $jumlah_data;?></p>
                              </div>

                            </div>

                          </div>
                        </div>
                        <div class="col-md-3">
                          
                          <a data-toggle="modal" href="#exampleModal" class="lihat">
                            <div class="dashboard">

                            <div class="row">

                              <div class="col-md-3 icon1">
                                <div class="icon">
                                  <i class="fa fa-shopping-cart"></i>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <p class="text">Barang Habis</p>
                              </div>

                            </div>

                          </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 profile">
                      <div class="row">
                        <div class="col-md-12 profile-content">
                          <div class="row">
                            <div class="col-md-4">
                            <div class="card">
                              <div class="card-body">
                                <div class="role">
                                  <p class="badge badge-danger">Admin</p>
                                </div>
                                <div class="text-center">
                                  <img src="assets/img/profile.png" class="med-pict">
                                  <b><p>Nama Admin</p></b>
                                  <p><button id="more"><b>More Info</b></button></p>
                                  <p><a href="#" class="medsos"><i class="fab fa-facebook-f"></i></a><a href="#" class="medsos"><i class="fab fa-instagram"></i></a></p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-7" id="more-info">
                            <div class="card">
                              <div class="icon2 d-flex ml-auto p-2 bd-highlight">

                                <button id="hide"><b>X</b></button>

                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6">
                                    <label><b>Nama Lengkap</b></label>
                                    <p class="text-info">-</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label><b>Gender</b></label>
                                    <p class="text-info">-</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label><b>Nama Toko</b></label>
                                    <p class="text-info">MibStore</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label><b>Alamat Toko</b></label>
                                    <p class="text-info">-</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label><b>Email Toko</b></label>
                                    <p class="text-info">-</p>
                                  </div>
                                  <div class="col-md-6">
                                    <label><b>Whatsapp</b></label>
                                    <p class="text-info">-</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          </div>

                      </div>
                    </div>
                  </div>
                  </div>
                    
                 </div>
          </div>          
        </div>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Barang yang hampir habis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Barang dengan satuan kg :</p>
                <ul>
                  <?php 
                  include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from barang where satuan = 'kg'");
                  while ($barang = mysqli_fetch_array($data)) {
                  ?>
                  
                    <?php

                      $jumlah = $barang['stok'];
                      if ($jumlah <= 3 ) {
                    ?>
                      <li><?php echo $barang['nama'];?></li>  
                    <?php
                      }

                    ?>
                  
                  <?php
                  }

                  ?>
                  
                </ul>
                <p>Barang dengan satuan pcs :</p>
                <ul>
                  <?php 
                  include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from barang where satuan = 'pcs'");
                  while ($barang = mysqli_fetch_array($data)) {
                  ?>
                  
                    <?php

                      $jumlah = $barang['stok'];
                      if ($jumlah <= 3 ) {
                    ?>
                      <li><?php echo $barang['nama'];?></li>  
                    <?php
                      }

                    ?>
                  
                  <?php
                  }

                  ?>
                  
                </ul>
                <p>Barang dengan satuan dus :</p>
                <ul>
                  <?php 
                  include 'koneksi.php';
                  $data = mysqli_query($koneksi,"select * from barang where satuan = 'dus'");
                  while ($barang = mysqli_fetch_array($data)) {
                  ?>
                  
                    <?php

                      $jumlah = $barang['stok'];
                      if ($jumlah <= 3 ) {
                    ?>
                      <li><?php echo $barang['nama'];?></li>  
                    <?php
                      }

                    ?>
                  
                  <?php
                  }

                  ?>
                  
                </ul>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      	
           
                 
          

      <script src="assets/js/info.js"></script>
      <script src="assets/js/jquery.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>