<?php
	include_once ('conexion.php');
	$titulo = "Alumnos";
	$alumnos = mysql_query("SELECT * FROM alumnos");
?>

<!DOCTYPE HTML>
<html>
<head>
	
	<meta charset = "UTF-8">
	<title><?php echo $titulo; ?></title>

</head>

<body>

	<h1><?php echo $titulo; ?></h1>

<table>
	<tbody>
		<tr>
			<th>ID</th>
			<th>Nombre Completo</th>
			<th>Cuenta</th>
			<th>Eliminar</th>
		</tr>
		
<tr>
<?php

	while($row = mysql_fetch_array($alumnos)){
		
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		
		echo "<td class='licenciaturas'><a href='detalle_alumno.php?id=" . $row['id']."'> " . $row['nombre'] . " " . $row['apellido_paterno'] . " " . $row['apellido_materno']." </a></td> ";
		
		echo "<td>" . $row['cuenta'] . "</td>";
		echo "<td><a href='eliminar_alumno.php?id=" . $row['id'] . "'>Eliminar</a></td>";
		echo "</tr>";
		}
	
?>
</tr>

</body>
</html>