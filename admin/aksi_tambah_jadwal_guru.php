<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$jadwal = $_POST['jadwal'];
	$jadwal_tempat = $_POST['jadwal_tempat'];
	$mapel = $_POST['mapel'];
	$jenis_kelas = $_POST['jenis_kelas'];
	$kd_guru = $_POST['kd_guru'];
	
	$sql='insert into jadwal_guru(jadwal, jadwal_tempat, mapel, jenis_kelas,kd_guru) values("'.$jadwal.'","'.$jadwal_tempat.'","'.$mapel.'","'.$jenis_kelas.'","'.$kd_guru.'")';
	$query= mysqli_query($con,$sql);
	if($query){
		header('location: jadwal_guru.php');
	}else{
		echo'gagal';
	}
}
?>