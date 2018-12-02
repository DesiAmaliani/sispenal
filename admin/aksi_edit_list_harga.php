<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$id_harga=$_POST['id_harga'];
	$paket=$_POST['paket'];
	$harga=$_POST['harga'];
	$jenis_kelas=$_POST['jenis_kelas'];
	if($jenis_kelas == 'Regular'){
		$jenis_kelas = "Regular";
	}else{
		$jenis_kelas = "Privat";
	}
	$sql='update list_harga set paket="'.$paket.'",harga="'.$harga.'", jenis_kelas="'.$jenis_kelas.'" where id_harga="'.$id_harga.'"';
	$query=mysqli_query($con,$sql);
	if($query){
		header('location: list_harga.php');
	}else{
		echo 'Gagal';
	}
}
?>