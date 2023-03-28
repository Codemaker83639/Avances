

<?php
	
	include 'Tienda.php';

	$metodo = $_REQUEST['action'];

	switch ($metodo)
	{
		case 'guardar':
			// recibiendo los datos del contacto
			$nombre = $_POST['nombre'];
			$marca = $_POST['marca'];
			$modelo = $_POST['modelo'];
			$cantidad = $_POST['cantidad'];

			$tienda = new Tienda;

			$tienda->nombre = $nombre;
			$tienda->marca = $marca;
			$tienda->modelo = $modelo;
			$tienda->cantidad = $cantidad;

			$tienda->guardar($tienda);

			header('Location: index.php');
			break;

		case 'actualizar':
			$tienda = Tienda::buscar($_POST['id']);

			$tienda->nombre = $_POST['nombre'];
			$tienda->marca = $_POST['marca'];
			$tienda->modelo = $_POST['modelo'];
			$tienda->cantidad = $_POST['cantidad'];

			Tienda::actualizar($_POST['id'], $tienda);

			header('Location: index.php');
			break;

		case 'eliminar':
			Tienda::eliminar($_POST['id']);

			header('Location: index.php');
			return 0;
			break;
		
		default:
			header('Location:index.php');
			break;
	}