<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nómina de los empleados</title>
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
      <h5 class="text-center" style="color:rgb(222, 184, 135);">Nómina de los empleados:</h5>
      <form action="Nómina.php" method="POST">

      </tr>
    </thead>
    <tbody>
      <tr>

      <tr class="table-primary">        
        <td class="text-center">No.cédula</td>
        <td class="text-center">Empleado</td>
        <td class="text-center">Cant.horas</td>
        <td class="text-center">Precio</td>
        <td class="text-center">Total</td>

      </tr>      
      <tr class="table-warning">
        <td class="text-center">503-0000000-0</td>
        <td class="text-center">Jose Luis Galán</td>
        <td class="text-center">8</td>
        <td class="text-center">70</td>
        <td class="text-center">560</td>
      </tr>
      <tr class="table-dark">
        <td class="text-center">408-0000000-1</td>
        <td class="text-center">Francisco Ogando</td>
        <td class="text-center">9</td>
        <td class="text-center">70</td>
        <td class="text-center">630</td>
      </tr>
      <tr class="table-info">
        <td class="text-center">309-0000000-4</td>
        <td class="text-center">Ayendri Jiménez</td>
        <td class="text-center">10</td>
        <td class="text-center">70</td>
        <td class="text-center">700</td>
      </tr>
    </tbody>
  </table>
</div>
        <br><br>
        <center>
        <button type="submit" style= "color:rgb(222, 184, 135)">Ver el total de la Nómina</button>
        </center>
</body>
</html>

