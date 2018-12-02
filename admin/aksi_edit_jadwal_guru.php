<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$kd_jg=$_POST['kd_jg'];
	$jadwal = $_POST['jadwal'];
	$jadwal_tempat = $_POST['jadwal_tempat'];
	$mapel = $_POST['mapel'];
	$jenis_kelas = $_POST['jenis_kelas'];
	$kd_guru = $_POST['kd_guru'];

	$sql='update jadwal_guru set jadwal="'.$jadwal.'", jadwal_tempat="'.$jadwal_tempat.'", mapel="'.$mapel.'", jenis_kelas="'.$jenis_kelas.'", kd_guru="'.$kd_guru.'" where kd_jg="'.$kd_jg.'"';
	$query=mysqli_query($con,$sql);
	if($query){
		header('location: jadwal_guru.php');
	}else{
		echo 'Gagal';
	}
}
?>