<?php
include "koneksi.php";

if(isset($_POST['submit'])){
	$id_paket=$_POST['id_paket'];
	$tingkat = $_POST['tingkat'];
	$sql='insert into paket(id_paket,tingkat) values("'.$id_paket.'","'.$tingkat.'")';
	$query= mysqli_query($con,$sql);
	$mapel =  $_POST['mapel'];
	foreach ($mapel as $map) {	
		$sql_mapel='insert into paket_mapel (id_paket,id_mapel) values("'.$id_paket.'","'.$map.'")';
		$query_mapel= mysqli_query($con,$sql_mapel);
	}
	if($query){
		header('location: paket.php');
	}else{
		echo'gagal';
	}
}
?>