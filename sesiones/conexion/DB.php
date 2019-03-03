<?php

class DB{

	private $host;
	private $bd;
	private $usuario;
	private $contraseña;
	private $charset;

	public function __construct(){

		$this->host="localhost";
		$this->bd="bdlunes";
		$this->usuario="root";
		$this->contraseña="";
		$this->charset="utf8";
	}

	 public function conexion(){

	 	try {
	 		
	        $conexion='mysql:host='.$this->host.';dbname='.$this->bd.';charset='.$this->charset;

	        $pdo=new PDO($conexion,$this->usuario,$this->contraseña);

             return $pdo;
	        echo "conexion establecida";

	 	} catch (PDOException $e) {
	 		echo "Hubo un error: ".$e->getMessage();
	 	}
	 }
}


?>