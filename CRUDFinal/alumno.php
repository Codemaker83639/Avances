<?php 
    include("conexion.php");//Incluye lo que está en el archivo de conexion.php
    $con=conectar(); //realizar la conexión

    $sql="SELECT *  FROM alumno"; //llamar todo lo que se encuentra en la tabla alumno
    $query=mysqli_query($con,$sql);  //ejecutar el query
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CRUD Estudiante</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/5035864183.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body style="background-color : lightyellow">
        <!--Centrar el encabezado con un padding de 3-->
        <h1 class="text-center p-3">Registro de Estudiantes</h1>
            
                        
                        <div class="container-fluid row">
                            
                                <form class="col-4 p-3" action="insertar.php" method="POST">
                                <h3 class="text-center text-secondary">Ingrese los datos</h3>
                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod estudiante">
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">
                                    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    
                                    
                                </form>
                        

                        <div class="col-8 p-4">
                            <table class="table" >
                                <thead class="bg-info" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Dni</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                        //Lleva a una tabla específica, arreglo para que 
                                        //cada vez que se ejecute la consulta,agrege los
                                        //campos

                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_estudiante']?></th>
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
           
    </body>
</html>