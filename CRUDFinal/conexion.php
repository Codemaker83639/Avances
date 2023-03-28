<?php
//Función para conectar la BD
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="crudfinal";

    $con=mysqli_connect($host,$user,$pass); //Para que el servidor encuentre las bd detu computadora

    mysqli_select_db($con,$bd);//Ingresa a una específica "crudfinal"

    return $con;
}
?>
