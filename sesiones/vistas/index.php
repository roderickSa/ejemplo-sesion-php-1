<?php

require_once("../modelo/usuario.php");
require_once("../sesion/sesion.php");

$usuario=new Usuario();
$usuarioSesion=new Sesion();


if(isset($_SESSION['user'])){
   
   $usuario->buscaUsuario($usuarioSesion->muestraSesion());

   include_once("home.php");

}else if(isset($_POST['envio'])){

		$usu=$_POST['user'];
		$pass=$_POST['pass'];

		$datos=$usuario->verificaUsuario($usu,$pass);  
		if($datos){
		  
		  $usuarioSesion->creaSesion($usu);
		  $usuario->buscaUsuario($usu);

		  include_once("home.php");

		}else{
			header('Location: login.php');
		}

}else {

	header('Location: login.php');
}

?>
