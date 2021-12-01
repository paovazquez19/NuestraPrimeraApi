<?php
include "conexionCLI.php";

$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];

$insertar="INSERT INTO cliente (nombre, telefono, correo)
VALUES('$nombre', '$telefono', '$correo')";

$resulado = mysqli_query($conexion, $insertar);

?>