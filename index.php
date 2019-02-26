

<!-- este index es como para redireccionar las rutas de la url -->

<?php 
// la variable esta funciona para ver lo que trae una variable o arreglo, lo de las comillas es el nombre del controlador
	var_dump($_GET['antonio']);


// si controlador en la url va vacio
	if (!isset($_GET['controller'])) {
		// esta seria la pagina de inicio de el proyecto
		require_once "Controllers/inicio.controller.php";
		// intancio el controlador
		$controller = new InicioController();

		// llamo a la funcion que deseo ejecutar
		call_user_func(array($controller,"Inicio"));
	}else{
		$controller = $_GET['controller'];
		require_once "Controllers/$controller.controller.php";

		// paso la primera palabra del controlador a mayuscula
		$controller = ucwords($controller)."Controller";

		// intancio el controlador
		$controller = new $controller;

		// meto en la variable action la accion que viene en la url o sino por defecto sera inicio
		$action = isset($_GET['action'] ? $_GET['controller'] : "Inicio");

		call_user_func(array($controller,$action));
	}
 ?>