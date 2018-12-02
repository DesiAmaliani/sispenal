<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$paket = $_POST['paket'];
	$harga = $_POST['harga'];
	$jenis_kelas = $_POST['jenis_kelas'];
	if($jenis_kelas == 'Regular'){
		$jenis_kelas = "Regular";
	}else{
		$jenis_kelas = "Privat";
	}
	$sql='insert into list_harga(paket,harga, jenis_kelas) values("'.$paket.'","'.$harga.'","'.$jenis_kelas.'")';
	$query= mysqli_query($con,$sql);
	if($query){
		header('location: list_harga.php');
	}else{
		echo'gagal';
	}
}
?>