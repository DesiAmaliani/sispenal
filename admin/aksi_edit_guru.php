<?php
include "koneksi.php";
if(isset($_POST['submit'])){
	$kd_guru=$_POST['kd_guru'];
	$nama_guru = $_POST['nama_guru'];
	$ttl = $_POST['ttl'];
	$no_hp = $_POST['no_hp'];
	$alamat = $_POST['alamat'];
	$riwayat_pen = $_POST['riwayat_pen'];
	if (isset($_POST['ubah_foto'])) {
		# code...
		$nama_file = $_FILES['foto']['name'];
		$tmp=$_FILES['foto']['tmp_name'];
		$fotobaru=date('dmYHis').$nama_file;
		$path="galeri/".$fotobaru;

		if (move_uploaded_file($tmp, $path)) {
			$apa="select * from guru where kd_guru='".$kd_guru."' ";
			$iy=mysqli_query($con,$apa);
			$j=mysqli_fetch_array($iy);

			if (is_file("galeri/".$j['foto'])) {
				# code...
				unlink("galeri/".$j['foto']);
				$sql='update guru set nama_guru="'.$nama_guru.'", ttl="'.$ttl.'", no_hp="'.$no_hp.'", alamat="'.$alamat.'", riwayat_pen="'.$riwayat_pen.'", foto="'.$fotobaru.'" where kd_guru="'.$kd_guru.'"';
				$query=mysqli_query($con,$sql);
				if($query){
					header('location: pengajar.php');
				}else{
					echo 'Gagal';
				}
			}
		}
	}
}
?>