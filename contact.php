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
						<li><a href="hadiah.php">Hadiah</a></li>
					</ul>
				</div>
				<li><a href="about.php">About</a></li>
				<li class="active"><a href="contact.php">Contact</a></li>
				<li><a href="logout.php" class="btn"><?php echo $_SESSION['nama']; ?></a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
			<p>Home / Contact</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>Contact Info</h3>
			<div class="box">
				<div class="col-4">
					<h4>Office Address</h4>
					<p>Jalan Lohbener Lama No.08, Legok, Kec. Lohbener, Kabupaten Indramayu, Jawa Barat 45252</p>
				</div>
				<div class="col-4">
					<h4>Email</h4>
					<p>kondanganid@gmail.com</p>
				</div>
				<div class="col-4">
					<h4>Whatsapp</h4>
					<p>0859-4215-0910</p>
				</div>
				<div class="col-4">
					<h4>Instagram</h4>
					<p>@kondangan.id</p>
				</div>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.88872837231!2d108.27929851431203!3d-6.4083326644561565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1638348713530!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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