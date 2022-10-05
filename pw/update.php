<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM buku WHERE id_buku='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Buku</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_bk" value="<?php echo $row['id_buku']; ?>">

		<div class="form-group">
			<label>Judul Buku</label>
			<input type="text" name="judul_bk" class="form-control" value="<?php echo $row['judul_buku']; ?>">			
		</div>

		<div class="form-group">
			<label>Pengarang Buku</label>
			<input type="text" name="pengarang_bk" class="form-control" value="<?php echo $row['pengarang_buku']; ?>">			
		</div>

		<div class="form-group">
			<label>Penerbit Buku</label>
			<input type="text" name="penerbit_bk" class="form-control" value="<?php echo $row['penerbit_buku']; ?>">			
		</div>

		<div class="form-group">
			<label>Gambar Buku</label>
			<input type="text" name="gambar_bk" class="form-control" value="<?php echo $row['gambar_buku']; ?>">			
		</div>

		<div class="form-group">
			<label>Tahun Terbit</label>
			<input type="text" name="tahun_tbt" class="form-control" value="<?php echo $row['tahun_terbit']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block">Update Buku</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 