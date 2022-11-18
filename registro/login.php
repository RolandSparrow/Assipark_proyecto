<?php 
include_once('db.php');
$identificacion = $_POST['identificaion'];
$contraseña = $_POST['contra'];

$con = conn();
$sql = "INSERT INTO registro (identificacion, contra)VALUES('$identificacion','$contraseña')";
$resultado = mysql_query($con,$sql);
?>
