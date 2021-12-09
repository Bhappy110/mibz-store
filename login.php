<!DOCTYPE html>
<html>
<head>
	<title>MIBZ Store</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
    <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.css">

</head>
<body>
	<div class="main-title text-center">

		<h2>Selamat Datang Di MIBZ Store</h2>

	</div>
	<div class="row">
		
		<div class="col-md-6 text-center">
			
			<div class="jumbotron">
				
				<img src="assets/img/Online store _Two Color.svg" class="image">

			</div>

		</div>
		<div class="col-md-4">
			
		<div class="pesan">
			<?php 

			if (isset($_GET['pesan'])) {
				if ($_GET['pesan'] == "gagal") {
			?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
	        Login Gagal
		      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>
			<?php
				}elseif ($_GET['pesan'] == "logout") {
			?>

			<div class="alert alert-danger alert-dismissible fade show" role="alert">
	        Anda Telah Logout
		      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		      </button>
		    </div>
			<?php
				}
			}

			?>
		</div>
		<div class="card" style="width: 25rem;" id="card">
		<div class="card-body">
		<div class="header text-center">
			<button id="icon">
				
				<i class="fa fa-user" id="fa-user"></i>

			</button>
			<b><p class="title" id="title">Tekan Icon</p></b>
		</div>
			<form method="POST" action="cek_login.php">
			<div class="form-group">
                <input type="text" name="username" placeholder="username" class="form-control">
             </div>
			<div class="form-group"> 
                <input type="password" name="password" placeholder="password" class="form-control password">
                <div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				    Show/Hide password
				 </label>
			</div>	
             </div>

			<input type="submit" value="LOGIN" class="btn btn-primary" id="submit">
			</form>
		</div>
			<div class="icon2 d-flex ml-auto p-2 bd-highlight">

				<a href="#" id="up"><i class="far fa-arrow-alt-circle-up" id="icon2"></i></a>

			</div>
		</div>

		</div>

		</div>


	<script type="text/javascript" src="assets/js/framework.js"></script>
	<script src="assets/js/login.js"></script>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	

</body>
</html>