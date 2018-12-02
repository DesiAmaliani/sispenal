<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$hari = $_POST['hari'];
	$hari2 = $_POST['hari2'];
	$jam = $_POST['jam'];
	$sampai = $_POST['sampai'];
	$paket = $_POST['paket'];
	$jenis_kelas = $_POST['jenis_kelas'];
	if($jenis_kelas == 'Regular'){
		$jenis_kelas = "Regular";
	}else{
		$jenis_kelas = "Privat";
	}
	$sql='insert into list_jadwal(hari,hari2,jam,sampai, paket, jenis_kelas) values("'.$hari.'","'.$hari2.'","'.$jam.'","'.$sampai.'","'.$paket.'","'.$jenis_kelas.'")';
	$query= mysqli_query($con,$sql);
	if($query){
		header('location: list_jadwal.php');
	}else{
		echo'gagal';
	}
}
?>