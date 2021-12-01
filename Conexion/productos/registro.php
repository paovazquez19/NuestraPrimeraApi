<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$precio=$_POST["precio"];
$direccion=$_POST["direccion"];
$tipodepago=$_POST["tipodepago"];

$insertar="INSERT INTO productos (nombre, precio, direccion, tipodepago)
VALUES('$nombre', '$precio', '$direccion', '$tipodepago')";

$resulado = mysqli_query($conexion, $insertar);

?>