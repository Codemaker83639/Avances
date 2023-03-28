<html>
<head>
 <meta charset= "UTF-8">
</head>
<body>
<center>
<h2> Programa para clasificar cuántos son 
positivos y negativos, con 15 valores.
</h2>     
</body>
</html>
 <?php
$positivos = 0;
$negativos = 0;
if (isset($_POST['enviar'])) {
    for ($i = 1; $i <= 15; $i++) {
        if ($_POST['numero' . $i] > 0) {
            $positivos++;
        } else {
            $negativos++;
        }
    }
    echo "Hay $positivos números positivos y $negativos números negativos";
} else {
    ?>
    <form action="11.php" method="post">
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "Número $i: <input type='number' name='numero$i' required><br>";
        }
        ?>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
}
echo "Hay $positivos positivos y $negativos negativos";
?>
</form>
</center>
</body>
</html>