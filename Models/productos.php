<?php 


class Productos
{
	// creo lavariable coneccion para conectarme con la base de datos
	private $connection;

	// creo las variables de la base de datos
	private $idProducto;
	private $nombreProducto;
	private $marcaProducto;
	private $costoProducto;
	private $precioProducto;
	private $cantidadProducto;
	private $imagenProducto;
	
	// creo el constructor para obtener la coneccion
	function __construct()
	{
		$this-> $connection = Connection::connect();
	
	}

// creo los set y get de cada variable
	// el signo ? es para especificar que el numero que viene de la base de datos no es nulo y luego el valor que deberia llegar
	public function getIdProducto() : ?int
	{
		return $this->idProducto;
	}

	public function setIdProducto(int $IdProducto)
	{
		$this->idProducto = $IdProducto;
	}


	public function getNombreProducto() : ?string
	{
		return $this->nombreProducto;
	}


	public function setNombreProducto(string $NombreProducto)
	{
		$this->nombreProducto = $NombreProducto;
	}


	public function getMarcaProducto() : ?string
	{
		return $this->marcaProducto;
	}


	public function setMarcaProducto(string $MarcaProducto)
	{
		$this->marcaProducto = $MarcaProducto;
	}


	public function getCostoProducto() : ?float
	{
		return $this->costoProducto;
	}


	public function setCostoProducto(float $CostoProducto)
	{
		$this->costoProducto = $CostoProducto;
	}


	public function getPrecioProducto() : ?float
	{
		return $this->precioProducto;
	}


	public function setPrecioProducto(float $PrecioProducto)
	{
		$this->precioProducto = $PrecioProducto;
	}


	public function getCantidadProducto() : ?int
	{
		return $this->cantidadProducto;
	}


	public function setCantidadProducto(int $CantidadProducto)
	{
		$this->cantidadProducto = $CantidadProducto;
	}


	public function getImagenProducto() : ?string
	{
		return $this->imagenProducto;
	}


	public function setImagenProducto(int $ImagenProducto)
	{
		$this->imagenProducto = $ImagenProducto;
	}
}
 ?>