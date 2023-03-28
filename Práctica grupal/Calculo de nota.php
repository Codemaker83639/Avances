<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Total de Calificaciones</title>
</head>
<body>
        <?php

        //Calcula la primera fila
        $valor1= $_REQUEST ["valor1"];
        $valor2= $_REQUEST ["valor2"];
        $valor3= $_REQUEST ["valor3"];
        $valor4= $_REQUEST ["valor4"];
        $valor5= $_REQUEST ["valor5"];
    
     
     
        $Total= $valor1 + $valor2 + $valor3 + $valor4 + $valor5;

        if ($Total >=90 )
        echo "Calificacion Excelente A";

        else if ($Total >=80)
        echo "Calificacion buena B";

        else if ($Total >=70)
        echo "Calificacion mediocre C";

        else if ($Total >=69)
        echo "Calificacion mala D";

        else 
        echo "Asignatura no aprobada: F";

    
        

       
        
        ?>

</body>
</html>