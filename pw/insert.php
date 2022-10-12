<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$pengarang = $_POST['pengarang_bk'];
$penerbit = $_POST['penerbit_bk'];
$gambar = $_POST['gambar_bk'];
$tahun = $_POST['tahun_tbt'];

//query

$query =  "INSERT INTO buku(judul_buku , pengarang_buku , penerbit_buku , gambar_buku , tahun_terbit) VALUES('$judul' , '$pengarang' , '$penerbit' , '$gambar' , '$tahun')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>