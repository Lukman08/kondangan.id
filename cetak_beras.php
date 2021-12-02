<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kondangan.id (Cetak Data Beras)</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<script type="js/bootstrap.min.js"> </script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <h5>.</h5>
<h1 class="text-center">DATA TAMU UNDANGAN</h1>
<h2 class="text-center">BERAS</h2>
<h5>.</h5>
	<?php 
	include 'config.php';
	?>

<table class="table table-bordered table-striped">
		<tr>
			<th width="1%">No</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Alamat</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($conn,"select * from beras");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama'] ?></td>
			<td><?php echo $data['jumlah'] . " kg"?></td>
			<td><?php echo $data['alamat'] ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<footer>
		<div class="container">
		<small>Copyright &copy; 2021 - Kondangan.id . All Rights Reserved.</small>
		</div>
	</footer>

	<script>
		window.print();
	</script>

</body>
</html>