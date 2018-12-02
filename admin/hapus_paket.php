<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from paket where id_paket="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: paket.php');
?>