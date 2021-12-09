<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
	   <link rel="stylesheet" type="text/css" href="assets/css/form.css">
  	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

    <title>MIBZ Store</title>
  </head>
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
            <a class="nav-link btn btn-primary active" href="#">+Tambah Data</a>
          </div>
        </div>
    
    </nav>

    <div class="row content">

          <div class="col-md-2">
            
            <div class="tombol">
              <nav class="nav flex-column nav-pills">
                
                  
                  <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Dashboard</a>
                  <a class="nav-link" href="table.php"><i class="fa fa-table"></i> Tabel</a>
                  <a class="nav-link" href="search.php"><i class="fa fa-search"></i> Cari Barang</a>
                  <a class="nav-link" href="logout.php" onclick=" return confirm('Anda Yakin ingin Logout ?')"><i class="fas fa-sign-out-alt"></i> Logout</a>

                
              </nav>
            </div>      

          </div>          
          
          <div class="col-md-10">
            
           <div class="jumbotron">
        <div class="row">
          <div class="col-md-5 form">
            <h3 class="title">Tambah Data Barang</h3>
            <br>
            <form action="tambah_aksi.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Kode Barang</label>
                <input type="text" class="form-control" id="exampleInputKode" aria-describedby="emailHelp" name="kode" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Barang</label>
                <input type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" name="nama" required>
              </div>
              <div class="form-group">
                <label for="inputSatuan">Satuan</label>
                <select class="form-control" id="inputSatuan" name="satuan" required>
                  <option value="Pcs">Pcs</option>
                  <option value="Dus">Dus</option>
                  <option value="Kg">Kg</option>
                </select>
               </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Harga</label>
                <input type="number" class="form-control" id="exampleInputHarga" aria-describedby="emailHelp" name="harga" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Stok</label>
                <input type="number" class="form-control" id="exampleInputStok" aria-describedby="emailHelp" name="stok" required>
              </div>
              <input type="submit" value="Submit" class="btn btn-primary" id="submit">
          </form>

          </div>
          <div class="col-md-6 text-center">
            
            <img src="assets/img/undraw_empty_cart_co35 (1).svg" class="image1">

          </div>
          
        </div>

      </div>
          </div>          
        </div>

    <div class="container wrap content">
      
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   	<script src="assets/js/jquery.js"></script>
	 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

    
  </body>
</html>