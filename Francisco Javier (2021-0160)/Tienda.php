
<?php
	
	session_start();

	class Tienda
	{
		public $nombre;
		public $marca;
		public $modelo;
		public $cantidad;

		public function __construct ()
		{
			if(! isset($_SESSION['Tienda']))
				$_SESSION['Tienda'] = [];
		}

		// Create (C)
		public function guardar (Tienda $tienda)
		{
			array_push($_SESSION['Tienda'], $tienda);
		}

		// Read (R)
		public static function tienda ()
		{
			// condición/operador ternario
			// ? => if
			// : => else
			return (isset($_SESSION['Tienda']) && !empty($_SESSION['Tienda']))
				? $_SESSION['Tienda']
				: null
			;


		}

		// Update (U)
		public static function buscar (int $id)
		{
			return $_SESSION['Tienda'][$id];
		}

		public static function actualizar (int $id, Tienda $tienda)
		{
			return $_SESSION['Tienda'][$id] = $tienda;
		}

		// Delete (D)
		public static function eliminar (int $id)
		{
			unset($_SESSION['Tienda'][$id]);
		}
	}