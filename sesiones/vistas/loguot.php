<?php

require_once("../sesion/sesion.php");

$sesion=new Sesion();

$sesion->cierraSesion();

header("Location: login.php");

?>