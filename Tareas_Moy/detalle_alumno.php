<?php
	include_once ('conexion.php');
	$titulo = "Detalle Alumnos";
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
			<th>Edad</th>
			<th>Cuenta</th>
			<th>Telefono</th>
			<th>Direccion</th>			
		</tr>
		
<tr>
<?php 

	while($row = mysql_fetch_array($alumnos)){
		
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td class='licenciaturas'>" . $row['nombre'];
		echo "<td>" . $row['edad'] . "</td>";
		echo "<td>" . $row['cuenta'] . "</td>";
		echo "<td>" . $row['telefono'] . "</td>";
		echo "<td>" . $row['direccion'] . "</td>";
		echo "</tr>";
		}
	
?>
</tr>

</body>
</html>