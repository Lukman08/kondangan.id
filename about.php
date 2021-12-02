<?php 

include'config.php';

session_start();

if (!isset($_SESSION['nama'])) {
	header("Location: home.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kondangan.id</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<script type="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
<!-- loader -->
<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="mailto:novkarizky@gmail.com?Subject=Booking%20Kondangan.id"><i class="far fa-envelope"></i></a></li>
				<li><a href="https://api.whatsapp.com/send?phone=6285942150910&text=Hallo%20Kak%20mau%20booking%20kondangan.id%20dong"><i class="fab fa-whatsapp"></i></a></li>
				<li><a href="https://www.instagram.com/adindapnr___"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="home.php">Kondangan.id</a></h1>
			<ul>
				<li><a href="home.php">Home</a></li>
				<div class="btn-group">
				<button type="button" class="btn btn-primary">
						<a href="menu.php">Menu</a>
					</button>
					<button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
						<span class="visually-hidden">Toggle Dropdown</span>
					</button>
					<ul class="dropdown-menu">
						<li><a href="kehadiran.php">Kehadiran</a></li>
						<li><a href="beras.php">Beras</a></li>
						<li><a href="uang.php">Uang</a></li>
						<li><a href="uang.php">Uang</a></li>
					</ul>
				</div>
				<li class="active"><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="logout.php" class="btn"><?php echo $_SESSION['nama']; ?></a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / About</p>
		</div>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<img src="img/banner.jpg" width="100%">
			<h3>About</h3>
			<p>Kondangan.id merupakan sistem penerimaan tamu undangan berbasis website untuk acara Anda,</p>
			<p>sistem digital akan mempermudah dan mempercepat proses registrasi acara</p>
			<p>tunangan, pernikahan, tujuh bulanan, khitanan dan acara lainnya.</p>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Kondangan.id . All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>