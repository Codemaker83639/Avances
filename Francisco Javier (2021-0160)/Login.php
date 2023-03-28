<?php

session_start();

?>

<!DOCTYPE HTML>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" src="EstiloLogin.css">
    <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->


</head>

<body>
    <a href="Index.php"> </a>
    <div class="container login-container">
        <div class="row">
            <form method="POST" class="col-md-6 border login-form-1 mx-auto bg-dark text-white p-4 rounded">
                <h3 class="text-center">Login Form 1</h3>

                <div class="form-group mt-4">
                    <input type="text" class="form-control bg-dark text-white" placeholder="Usuario" value="" required name="usuario" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control bg-dark text-white" placeholder="Contraseña" value="" required  name="contra"/>
                </div>
                <div class="form-group d-flex justify-content-center mt-4">
                    <input type="submit" class="btn btn-dark col-6 border border-light" value="Inciar sesion" name="enviar" />
                </div>

            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['enviar'])) {
        $usuario = $_POST['usuario'];
        $contra = $_POST['contra'];

        if ($usuario == "prog1" && $contra == "prog123") {


            $_SESSION['usuario'] = $usuario;
            $_SESSION['contra'] = $contra;

            header('Location: index.php');
        } else {
            echo "Error usuario o contraseña incorrectas intente de nuevo";
        }
    }

    ?>
</body>

</html>