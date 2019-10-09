<?php 
 
$link = mysqli_connect("localhost","root","","rtrw_net");
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">