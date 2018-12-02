<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from list_harga where id_harga="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: list_harga.php');
?>