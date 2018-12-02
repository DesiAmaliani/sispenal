<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$id_jadwal=$_POST['id_jadwal'];
	$hari=$_POST['hari'];
	$hari2=$_POST['hari2'];
	$jam=$_POST['jam'];
	$sampai=$_POST['sampai'];
	$paket=$_POST['paket'];
	$jenis_kelas=$_POST['jenis_kelas'];
	if($jenis_kelas == 'Regular'){
		$jenis_kelas = "Regular";
	}else{
		$jenis_kelas = "Privat";
	}
	$sql='update list_jadwal set hari="'.$hari.'", hari2="'.$hari2.'", jam="'.$jam.'", sampai="'.$sampai.'", paket="'.$paket.'", jenis_kelas="'.$jenis_kelas.'" where id_jadwal="'.$id_jadwal.'"';
	$query=mysqli_query($con,$sql);
	if($query){
		header('location: list_jadwal.php');
	}else{
		echo 'Gagal';
	}
}
?>