<!DOCTYPE html>
//ejercicio 8 segunda sección//
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form id="menu" name="menu" method="post" action="">
        Seleccionar tu dia y mes de Nacimiento
        <br><br>
        <select name="meses">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>

        <select name="dias">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>

        <input type="submit" value="Enviar" />

   
    </form>
    
    

    <?php
    $dia = NULL;
    $mes = NULL;
    echo "<br>";
    echo "Tu signo es: ";
    if (filter_input_array(INPUT_POST)) {
        $dia = trim(filter_input(INPUT_POST, "dias"));
        $mes = trim(filter_input(INPUT_POST, "meses"));
    }

    switch ($mes) {
        case 1:
            if ($dia <= 21) {
                echo "CAPRICORNIO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "ACUARIO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
                
            }
            break;
        case 2:
            if ($dia <= 21) {
                echo "ACUARIO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "PISCIS";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 3:
            if ($dia < 20) {
                echo "PISCIS";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "ARIES2";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 4:
            if ($dia < 20) {
                echo "ARIES";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "TAURO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 5:
            if ($dia < 21) {
                echo "TAURO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "GEMINIS";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 6:
            if ($dia < 20) {
                echo "GEMINIS";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "CANCER";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 7:
            if ($dia < 22) {
                echo "CANCER";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "LEO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 8:
            if ($dia < 21) {
                echo "LEO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "VIRGO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 9:
            if ($dia < 22) {
                echo "VIRGO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "LIBRA";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 10:
            if ($dia < 22) {
                echo "LIBRA";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "ESCORPION";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 11:
            if ($dia < 21) {
                echo "ESCORPION";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "SAGITARIO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
        case 12:
            if ($dia < 21) {
                echo "SAGITARIO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            } else {
                echo "CAPRICORNIO";
                ?>
                <br><br>
                <a href="index.php"><input type="submit" value="Volver al inicio"></a>
                <?php
            }
            break;
    }



    ?>
</body>

</html>