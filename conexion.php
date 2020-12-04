<?php
//conexion a base de datos

$server="localhost";
$usuario="root";
$contraseña="";
$basededatos="infoaplicada1";

$enlace =  mysql_connect($server,$usuario,$contraseña,$basededatos);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);





?>