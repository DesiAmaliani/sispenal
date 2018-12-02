<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from list_jadwal where id_jadwal="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: list_jadwal.php');
?>