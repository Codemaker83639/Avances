<?php
//ejercicio 10 segunda sección//
$primeraprueba = 10;
$segundaprueba = 15;
$tercerprueba = 30;
$trabajo_practico = 20;
$trabajo_de_investigacion = 25;
$calificacion_final = $primeraprueba + $segundaprueba + $tercerprueba + $trabajo_de_investigacion + $trabajo_practico;
echo "su calificacion final es: $calificacion_final ";

$A = 90 >= 99.99;
$B = 80 >= 89;
$C = 70 >= 79;
$D = 60 >= 69;
$F = 0 >= 59;

if ($calificacion_final >= 90) {
    echo "A excelente calificación";
} elseif ($calificacion_final >= 80) {
    echo "B buena calificación";
} elseif ($calificacion_final >= 70) {
    echo "C calificación regular";
} elseif ($calificacion_final >= 60) {
    echo "D calificación deficiente";
} else {
    echo "F reprobado esfuérzate más";
}
?>
