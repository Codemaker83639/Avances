<?php

	include('Tienda.php');

	
	$tienda = Tienda::tienda();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tienda de computadoras</title>
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
			<div class="col-md-12 mt-5">
				<h4 class="mb-4">Ordenadores Registrados</h4>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Cantidad</th>
						</tr>
					</thead>
					<tbody>
						<?php if (isset($tienda)): ?>
							<?php foreach ($tienda as $id => $tienda): ?>
								<tr>
									<td><?php echo ($id + 1); ?></td>
									<td><?php echo $tienda->nombre; ?></td>
									<td><?php echo $tienda->marca; ?></td>
									<td><?php echo $tienda->modelo; ?></td>
									<td><?php echo $tienda->cantidad; ?></td>

									<td class="d-flex">
										<a href="edit.php?id=<?php echo $id; ?>" class="btn btn-primary rounded-pill">Editar</a>


										<form
											action="action.php"
											method="POST"
											id="tienda-id-<?php echo $id; ?>"
										>
											<input type="hidden" name="action" value="eliminar">
											<input type="hidden" name="id" value="<?php echo $id; ?>">

											<button
												class="btn btn-danger rounded-pill"
												onclick="document.getElementById('tienda-id-<?php echo $id; ?>').submit();"
											>Borrar
											</button>
										</form>
									</td>
								</tr>
							<?php endforeach ?>
						<?php endif ?>
					</tbody>
				</table>

			
			</div>
		</div>
	</main>

	<!-- Footer -->
	<?php include('partials/footer.php'); ?>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>