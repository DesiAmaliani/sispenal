<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$mapel = $_POST['mapel'];
	$deskripsi = $_POST['deskripsi'];
	$biaya = $_POST['biaya'];
	$status = $_POST['status'];
	
	$sql='insert into mapel(mapel,deskripsi,biaya, status) values("'.$mapel.'","'.$deskripsi.'","'.$biaya.'","'.$status.'")';
	$query= mysqli_query($con,$sql);
	if($query){
		header('location: mapel.php');
	}else{
		echo'gagal';
	}
}
?>