<?php
include "koneksi.php";
$ni	= $_GET['ni'];
$sql 	= 'delete from mapel where id_mapel="'.$ni.'"';
$query	= mysqli_query($con,$sql);
header('location: mapel.php');
?>