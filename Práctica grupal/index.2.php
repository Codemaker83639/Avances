<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Estudiantes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">

  <table class="table">
    <thead>
      <tr>
      <h5 class="text-center" style="color:rgb(222, 184, 135);">Lista de Estudiantes</h5>
      <form action="Calculo de nota.php" method="post">

      </tr>
    </thead>
    <tbody>
      <tr>

      <tr class="table-primary">        
        <td class="text-center">Estudiante</td>
        <td class="text-center">Asignatura</td>
        <td class="text-center">PP(10)</td>
        <td class="text-center">SP(15)</td>
        <td class="text-center">TI(25)</td>
        <td class="text-center">TP(30)</td>
        <td class="text-center">EF(20)</td>
        <td class="text-center">CF</td>
        <td class="text-center">Letra</td>
        <td class="text-center">Acciones</td>


      </tr>      
      <tr class="table-warning">
        <td class="text-center"><input type="text"></td>
        <td class="text-center"><input type="text"></td>
        <td class="text-center"><input type="number" id="valor1" name="valor1"></td>
        <td class="text-center"><input type="number" id="valor2" name="valor2"></td>
        <td class="text-center"><input type="number" id="valor3" name="valor3"></td>
        <td class="text-center"><input type="number" id="valor4" name="valor4"></td>
        <td class="text-center"><input type="number" id="valor5" name="valor5"></td>
        <td class="text-center" ><input type="number" id="Total" name="Total"></td>
        <td class="text-center"><button type="submit "  id="Total1" name="Total1">Calicicacion</button></td>
        <td class="text-center"><button type="submit" id="Total" name="Total">Borrar</button></td>
      </tr>
      <tr class="table-dark">
        <td class="text-center"><input type="text"></td>
        <td class="text-center"><input type="text"></td>
        <td class="text-center"><input type="number" id="valor6" name="valor6"></td>
        <td class="text-center"><input type="number" id="valor7" name="valor7"></td>
        <td class="text-center"><input type="number" id="valor8" name="valor8"></td>
        <td class="text-center"><input type="number" id="valor9" name="valor9"></td>
        <td class="text-center"><input type="number" id="valor10" name="valor10"></td>
        <td class="text-center"><input type="number" id="Total" name="Total"></td>
        <td class="text-center"><button type="submit "  id="Total1" name="Total1">Calicicacion</button></td>
        <td class="text-center"><button type="submit "  id="Total1" name="Total1">Borrar</button></td>
      </tr>
      <tr class="table-info">
        <td class="text-center"><input type="text"></td>
        <td class="text-center"><input type="text"></td>
        <td class="text-center"><input type="number" id="valor11" name="valor11"></td>
        <td class="text-center"><input type="number" id="valor12" name="valor12"></td>
        <td class="text-center"><input type="number" id="valor13" name="valor13"></td>
        <td class="text-center"><input type="number" id="valor14" name="valor14"></td>
        <td class="text-center"><input type="number" id="valor15" name="valor15"></td>
        <td class="text-center"><input type="number" id="Total" name="Total"></td>
        <td class="text-center"><button type="submit "  id="Total1" name="Total1">Calicicacion</button></td>
        <td class="text-center"><button type="submit" id="Total2" name="Total2">Borrar</button></td>
      </tr>
    </tbody>
  </table>
</div>
        <br><br>
    
       
        
</body>
</html>