<?php
//creamos la conexion a la base de datos y verificamos que esta sirva
$conexion = mysqli_connect("localhost","root","","bdproyecto");

if(isset($_POST["submit"])){
    if(!$conexion){
        echo "ERROR EN EL ENLACE AL SERVIDOR DE LA BASE DE DATOS";
    }else{
        echo "La conexion se establecio de forma satisfactoria";
    }
}

?>