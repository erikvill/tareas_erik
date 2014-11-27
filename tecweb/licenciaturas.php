<?php
	include_once ('conexion.php');
	$titulo = "Hola Mundo";
	$licenciaturas = mysql_query("SELECT * FROM licenciaturas");
?>

<!DOCTYPE HTML>
<html>
<head>
	
	<meta charset = "UTF-8">
	<title><?php echo $titulo; ?></title>

</head>

<body>

	<h1><?php echo $titulo; ?></h1>

<?php
	
	while($row = mysql_fetch_array($licenciaturas)){
		echo "<p class='lilcenciaturas'>" . $row['nombre'] . " " . $row['apellido_paterno'] . " " . $row['apellido_materno'] . "</p>";
	}
	
?>

</body>
</html>