<?php

if(!isset($_SESSION['user'])){
    
    header("Location: index.php");
}

$user=$usuario->dameNombreUsuario();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script src="../js/main.js" type="text/javascript"></script>

</head>
<body>

	<div>
		<h3>Bienvenido: <?php echo ($user); ?></h3>
	</div>

	<div>
		<a href="loguot.php">Cerrar Sesión</a>
	</div>
	
</body>
</html>