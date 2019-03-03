<?php

class Sesion{

  public function __construct(){
  	session_start();
  }

  public function creaSesion($nombre){

    $_SESSION['user']=$nombre;
  }
  public function muestraSesion(){

  	return $_SESSION['user'];
  }
  public function cierraSesion(){

  	session_unset();
  	session_destroy();
  }

}

?>