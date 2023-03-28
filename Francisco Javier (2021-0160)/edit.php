
<?php
	
	include_once 'Tienda.php';

	$tienda = Tienda::buscar($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edición de Registros</title>
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		footer {
			position: absolute;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>
<body>
	<!-- Header -->
	<?php include('partials/header.php'); ?>

	<main class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-5">
				<h4 class="mb-3">Editar Registros</h4>

				<form class="form" action="action.php" method="POST">
					<input type="hidden" name="action" value="actualizar">
					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

					<div class="form-group">
						<label class="nombre">Nombre: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="nombre" id="nombre" required value="<?php echo $tienda->nombre; ?>" autocomplete="off">
					</div>

					<div class="form-group">
						<label class="marca">Marca: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="marca" id="marca" required value="<?php echo $tienda->marca; ?>" autocomplete="off">
					</div>

					<div class="form-group">
						<label class="modelo">Modelo: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="modelo" id="modelo" required value="<?php echo $tienda->modelo; ?>" autocomplete="off">
					</div>
					<div class="form-group">
						<label class="modelo">Existencia: <strong class="text-danger"><small>*</small></strong></label>
						<input class="form-control" type="text" name="cantidad" id="cantidad" required value="<?php echo $tienda->existencia; ?>" autocomplete="off">
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="btn btn-success btn-block rounded-pill" style="display: block; width: 100%;">
							Actualizar
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>

	<!-- Footer -->
	<?php include('partials/footer.php'); ?>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>