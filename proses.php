<?php
include 'koneksi.php';

$username   = $_POST['username'];
$pass       = md5($_POST['password']);
 
 
$user = mysqli_query($link,"select * from login where username='$username' and password='$pass'");
$cek = mysqli_num_rows($user);
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	header("location:home.php");
}else{
	header("location:login.php");	
}
?>