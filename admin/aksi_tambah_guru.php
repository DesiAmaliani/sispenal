<?php
include "koneksi.php";
if(isset($_POST['submit'])){
//tentukan variabel file yg diupload dan tipe file
	$nama_guru = $_POST['nama_guru'];
	$ttl = $_POST['ttl'];
	$no_hp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];
	$riwayat_pen = $_POST['riwayat_pen'];

	$nama_file = $_FILES['foto']['name'];
	$tmp=$_FILES['foto']['tmp_name'];
	$fotobaru=date('dmYHis').$nama_file;
	$path="galeri/".$fotobaru;

	if (move_uploaded_file($tmp, $path)) {
		# code...
		$sql='insert into guru(nama_guru,ttl,no_hp, alamat,riwayat_pen,foto) values("'.$nama_guru.'","'.$ttl.'","'.$no_hp.'","'.$alamat.'","'.$riwayat_pen.'","'.$fotobaru.'")';
		$query= mysqli_query($con,$sql);
		if($query){
			header('location: pengajar.php');
		}else{
			echo'gagal';
		}
	}
	
}
?>