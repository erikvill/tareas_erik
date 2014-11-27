<?php
	include_once("variables.php");
	$titulo_pagina = "Los Mejores Generos";
	$generos = mysql_query("SELECT * FROM generos");
?>

<!DOCTYPE HTML>
<html>
<head>
	
	<?php include_once ("head.php") ?>
	
</head>
<body>

	<header>
		<h1><?php echo $titulo_sitio; ?></h1>
		<?php include_once("menu.php"); ?>
	</header>
	
	<h1>Géneros</h1>
	
	<?php while($row = mysql_fetch_array($generos)) {
		echo $fila['id']. " - ";
		echo $row['nombre'];
		echo "<br/>";
	} ?>
	
</body>
</html>