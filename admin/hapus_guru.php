<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from guru where kd_guru="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: pengajar.php');
?>