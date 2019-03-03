<?php

require_once("../conexion/DB.php");

class Usuario extends DB{

 private $usuario;
 private $nombre;

 public function verificaUsuario($usu,$pass){

 	$md5pass=md5($pass);

 	$sql="select count(*) as conteo from usuarios where usuario=? and contraseña=?";
 	
 	$sql=$this->conexion()->prepare($sql);

 	$sql->bindParam(1,$usu);
 	$sql->bindParam(2,$md5pass);
    
 	$sql->execute();

 	$resultados=$sql->fetchAll();

    foreach ($resultados as $row) {
    	if($row['conteo']>0){
           return true;
    	}else return false;
    }
 
 }

 public function buscaUsuario($usu){

 	$sql="select * from usuarios where usuario=:usu";

 	$sql=$this->conexion()->prepare($sql);
    $sql->bindParam(':usu',$usu);
    $sql->execute();

    $resultado=$sql->fetchAll();

    foreach ($resultado as $row) {
    	
    	$this->nombre=$row['nombre'];
    }

 }

 public function dameNombreUsuario(){

 	return $this->nombre;
 }

 public function insertarUsuario($usu,$nom,$pass){
      
     $md5pass=md5($pass);

     $sql="insert into usuarios (nombre,usuario,contraseña) values(:nombre,:usuario,:pass)";

     $sql=$this->conexion()->prepare($sql);
      
     $sql->bindParam(':nombre',$nom);
     $sql->bindParam(':usuario',$usu);
     $sql->bindParam(':pass',$md5pass);

     if($sql->execute()){
     	echo "usuario insertado";
     }else{
     	echo "hubo algun error al insertar";
     }

 }

}

/*$dato=new Usuario();
$resultado=$dato->verificaUsuario('Juan','juanRodolfo123');//juanRodolfo123
echo $resultado;

echo $dato->retornaUsuario('Juan');
echo $dato->dameNombreUsuario();*/

?>