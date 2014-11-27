<a href="menu.php" id="" title="conexion">Menu</a><?php

$conexion = mysql_connect ('localhost','root','root');
if (!$conexion){
	die('No se pudo conectar: ' . mysql_error());
}

//Conexion a la base de datos licenciaturas

$bd = mysql_select_db('carreras',$conexion);
mysql_set_charset('utf-8' , $conexion);

?>