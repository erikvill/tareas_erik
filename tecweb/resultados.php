<?php
	include_once ('conexion.php');
	$titulo = "Resultados";
?>

<!DOCTYPE HTML>
<html>
<head>
	
	<meta charset = "UTF-8">
	<title><?php echo $titulo; ?></title>

</head>

<body>

<h1><?php echo $titulo; ?></h1>

<?php include_once('menu.php') ;?>

<?php

echo "La variable pasada por Get es : " . $_GET['nombre'];

echo "La variable pasada por POST es : " . $_POST['id'];


?>

</body>
</html>