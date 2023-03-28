<?php

$user = $_REQUEST['usuario'];
$password = $_REQUEST['contraseña'];

$a = 145;
$b = 237;

$a1 = 2;
$b2 = 5;

if ($user == "Admin" && $password == "Admin2022"){
    echo"El usuario es: $user y la contraseña es: $password.";
    echo "<br>";
    echo"La suma de las dos variables es: ", $a + $b;
    echo "<br>";
    echo"La resta de las dos variables es: ", $b - $a;
}elseif($user == "Alpha" && $password == "Alpha2022"){
    echo"El usuario es: $user y la contraseña es: $password.";
    echo "<br>";
    echo "La multiplicación de las dos variables es:", $a1 * $b2;
}else {
    echo "Acceso denegado, Usuario y contraseña son incorrectos";
}