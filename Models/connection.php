<?php 

// obtengo los datos de la conexion de la pagina
	require ("config.php");

	class Connection{

// protected solo para que se puedan ver dentro de la misma clase, fuera no
		protected $connection_db;

// se crea el constructor de esta clase
		public function __construct(){

// con el this obtengo valores de fuera de esta funcion, luego a la variable se instancia con los valores de la conexion
			$this->connection_db = new mysqli (DB_HOST, DB_USER, DB_PASS, DB_NAME);

// este if es para obtener datos en caso de tener algun error
			if($this->connection_db->connect_errno){

				echo "Fallo la conexion a la base de datos: " . $this->connection_db->connect_error;
				return;
			}

// el charset es por si en la base de datos hay comas aqui se muestren tambien
			$this->connection_db->set_charset(DB_CHARSET);
		}
	}

 ?>