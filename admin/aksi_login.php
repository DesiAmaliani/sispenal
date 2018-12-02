<?php
	session_start();
	include 'koneksi.php';

	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$status=$_GET['status'];

	$query=mysqli_query($con,"select * from login where username='$username' and password='$password'");
	$a=mysqli_num_rows($query);
	$hasil = mysqli_fetch_array($query);

	if($a==TRUE){
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		header("location:home.php");
	}else{
		echo "<script>alert('Username atau Password Salah'); location='index.php';</script>";
	} 
?>
