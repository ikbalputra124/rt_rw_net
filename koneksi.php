<?php 
 
$koneksi = mysqli_connect("localhost","root","","rtrw_net");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>