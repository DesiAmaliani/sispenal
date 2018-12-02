<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$id_mapel=$_POST['id_mapel'];
	$mapel=$_POST['mapel'];
	$deskripsi=$_POST['deskripsi'];
	$biaya=$_POST['biaya'];
	$status=$_POST['status'];

	$sql='update mapel set mapel="'.$mapel.'", deskripsi="'.$deskripsi.'", biaya="'.$biaya.'", status="'.$status.'" where id_mapel="'.$id_mapel.'"';
	$query=mysqli_query($con,$sql);
	if($query){
		header('location: mapel.php');
	}else{
		echo 'Gagal';
	}
}
?>