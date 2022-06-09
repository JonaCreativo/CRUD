<?php 
include 'conexion.php';
$id=$_GET['Id'];
$sql="delete from persona where Id='".$id."'";
mysql_query($sql);
header('location:index.php');
?>