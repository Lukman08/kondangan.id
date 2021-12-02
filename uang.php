<?php 
include'config.php';

session_start();

if (!isset($_SESSION['nama'])) {
	header("Location: home.php");
}

//jika tombol simpan diklik
if(isset($_POST['bsimpan']))
{
	//Pengujian Apakah data akan diedit atau disimpan baru
	if($_GET['hal'] == "edit")
	{
		//Data akan di edit
		$edit = mysqli_query($conn, "UPDATE uang set
									nama = '$_POST[tnama]',
									jumlah = '$_POST[tjumlah]',
									alamat = '$_POST[talamat]'
									WHERE id = '$_GET[id]'
									");
		if($edit) //jika edit sukses
		{
			echo "<script>
					alert('Edit data suksess!');
					document.location='uang.php';
					</script>";
		}
		else
		{
			echo "<script>
					alert('Edit data GAGAL!!');
					document.location='uang.php';
					</script>";
		}
	}
	else
	{
		//Data akan disimpan Baru
		$simpan = mysqli_query($conn, "INSERT INTO uang (nama, jumlah, alamat)
		VALUES ('$_POST[tnama]',
				'$_POST[tjumlah]', 
				'$_POST[talamat]')
				");
if($simpan) //jika simpan sukses
{
echo "<script>
alert('Simpan data suksess!');
document.location='uang.php';
</script>";
}
else
{
echo "<script>
alert('Simpan data GAGAL!!');
document.location='uang.php';
</script>";
}
}


	
}


//Pengujian jika tombol Edit / Hapus di klik
if(isset($_GET['hal']))
{
	//Pengujian jika edit Data
	if($_GET['hal'] == "edit")
	{
		//Tampilkan Data yang akan diedit
		$tampil = mysqli_query($conn, "SELECT * FROM uang WHERE id = '$_GET[id]' ");
		$data = mysqli_fetch_array($tampil);
		if($data)
		{
			//Jika data ditemukan, maka data ditampung ke dalam variabel
			$vnama = $data['nama'];
			$vjumlah = $data['jumlah'];
			$valamat = $data['alamat'];
		}
	}
	else if ($_GET['hal'] == "hapus")
	{
		//Persiapan hapus data
		$hapus = mysqli_query($conn, "DELETE FROM uang WHERE id = '$_GET[id]' ");
		if($hapus){
			echo "<script>
					alert('Hapus Data Suksess!!');
					document.location='uang.php';
					</script>";
		}
	}
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
				<li><a href="#"><i class="far fa-envelope"></i></a></li>
				<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
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
				<li><a href="contact.php">Contact</a></li>
				<li><a href="logout.php" class="btn"><?php echo $_SESSION['nama']; ?></a></li>
			</ul>
		</div>
	</header>

	<!-- label -->
	<section class="label">
		<div class="container">
		<p>Home / Menu / Uang</p>
		</div>
	</section>

	<div class="container">

<h1 class="text-center"></h1>
<h2 class="text-center">INPUT DATA TAMU UNDANGAN</h2>

<!-- Awal Card Form -->
<div class="card mt-3">
	<div class="card-header bg-primary text-white">
	Form Input Data Uang
</div>
<div class="card-body">
	<form method="post" action="">
		<div class="form-group">
			<label>Nama</label>
			<input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Input Nama" required>
		</div>
		<div class="form-group">
			<label>Jumlah</label>
			<input type="text" name="tjumlah" value="<?=@$vjumlah?>" class="form-control" placeholder="Input Jumlah" required>
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea class="form-control" name="talamat"  placeholder="Input Alamat "><?=@$valamat?></textarea>
		</div>

		<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
		<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
		<button class="btn btn-warning btn"><a href="cetak_beras.php" target="_blank">Cetak</a></button>
	</form>
</div>
</div>
<!-- Akhir Card Form -->

<!-- Awal Card Tabel -->
<div class="card mt-3">
	<div class="card-header bg-success text-white">
		Daftar Uang
	</div>
	<div class="card-body">
		<table class="table table-bordered table-striped">
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Jumlah</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
			<?php
			$no = 1;
			$tampil = mysqli_query($conn, "SELECT * from uang");
			while($data = mysqli_fetch_array($tampil)) :

		?>
		<tr>
			<td><?=$no++;?></td>
			<td><?=$data['nama']?></td>
			<td>Rp. <?=$data['jumlah']?></td>
			<td><?=$data['alamat']?></td>
			<td>
				<a href="uang.php?hal=edit&id=<?=$data['id']?>" class="btn btn-warning"> Edit </a>
				<a href="uang.php?hal=hapus&id=<?=$data['id']?>"
				onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-danger"> Hapus </a>
				</td>
		</tr>
	<?php endwhile; //penutup perulangan while ?>
	</table>
</div>
</div>
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