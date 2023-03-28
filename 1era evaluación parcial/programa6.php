<form method="post" action=""><input type="number" name="txt" placeholder="Ingrese numero">

    <input type="submit" name="enviar" value="Crear">
</form>
<br>
<a href="index.php"><input type="submit" value="Volver al inicio"></a>

<?php
$contador = 1;
$imp = 0;
$par = 0;
$sp = 0;
$si = 0;
if (isset($_POST['enviar'])) {

    $i = (int)$_POST['txt'];


    echo "<br><br><b>";
    echo "Clasificacion de los numeros pares e impares del 1 al {$i}";
    echo "<br><br></b>";
    for ($j = 1; $j <= $i; $j++) {


        if ($j % 2 == 0) {
            echo "<b>";
            echo $j;
            echo "</b>";
            echo " (Es par)";

            $par++;
            $sp += $j;
        } else {
            echo "<b>";
            echo $j;
            echo "</b>";
            echo " (Es impar)";
            $imp++;
            $si += $j;
        }
        echo " <br>";
        $contador++;
    }


    echo "<br><br>";
    echo "<b>";
    echo "Total de pares: ";
    echo "</b>";
    echo $par;
    echo "<br>";
    echo "<b>";
    echo "Suman de pares: ";
    echo "</b>";
    echo $sp;
    echo "<br>";
    echo "<b>";
    echo "Total de impares: ";
    echo "</b>";
    echo $imp;
    echo "<br>";
    echo "<b>";
    echo "Suma de impares ";
    echo "</b>";
    echo $si;
}
?>