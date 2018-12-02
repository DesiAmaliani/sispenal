<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from jadwal_guru where kd_jg="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: jadwal_guru.php');
?>