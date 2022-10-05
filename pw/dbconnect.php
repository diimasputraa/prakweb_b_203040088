<!-- Connect Database -->

<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "prakweb_b_203040088";
$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn){
	die("error in connection");
}

//echo "database connected"
?>