<!-- Edit -->

<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$pengarang = $_GET['pengarang_bk'];
$penerbit = $_GET['penerbit_bk'];
$gambar = $_GET['gambar_bk'];
$tahun = $_GET['tahun_tbt'];

//query update
$query = "UPDATE buku SET judul_buku='$judul' , pengarang_buku='$pengarang' , penerbit_buku='$penerbit' , gambar_buku='$gambar' , tahun_terbit='$tahun' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>