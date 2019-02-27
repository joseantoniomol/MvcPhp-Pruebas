<?php 

/**
 * este es el controlador de el inicio,sera la pagina que se vea siempre de primero
 */
class InicioController 
{
	
	private $model;

// metodo constructor de la clase
	function __construct()
	{
		// this->model = new Producto();
	}

// estaes una funcion para la pagina de inicio
	public function Inicio(){

		$db = Connection::connect();

// llamo a la vista que esta dentro de  una carpeta
		require_once"Views/inicio/principal.php";
	}
 
	
}



 ?>