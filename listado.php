<?php
//muestra los ultimos 100 listados
include_once("conexion.php");

$sql ="
SELECT
FROM formulario
ORDER_BY id DESC
LIMIT 100
";

$result=mysql_query($enlace,$sql);

while ($estafila=mysqli_fetch_array($result))
{
	echo $estafila['id'];
	echo "--";
	echo $estafila['x'];
	echo "--";
	echo $estafila['y'];
	echo "--";
	echo $estafila['radio'];
	echo "--";
	echo $estafila['color'];
	echo "--";
	echo $estafila['palabra'];
	echo "<br/>";
}


?>