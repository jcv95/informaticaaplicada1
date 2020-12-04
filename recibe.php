<?php
include_once("conexion.php");

print($_GET);

if (isset($_GET['x'])) 
{
	$x = $_GET['x'];
}
else
{
	$x="";
}


if (isset($_GET['y'])) 
{
	$y = $_GET['y'];
}
else
{
	$y="";
}



if (isset($_GET['color'])) 
{
	$color = $_GET['color'];
}
else
{
	$color="";
}



if (isset($_GET['radio'])) 
{
	$x = $_GET['radio'];

	if ($radio<0 or $radio>360)
	{
		$radio="";
	}
	else
	{
		$radio="";
	}
}


//variables si no existe o falte completar una varible
if($x=="" or $y=="" or $color=="")
{
	die("falta completar una variable");
}

//insetar registro en la base de datos
$sql=" 

	INSERT INTO formulario
	SET
	x='$x',
	y='$y',
	color='$color',
	radio='$radio',
";
echo "<br>";
echo "$sql";
echo "<br>";

$result = mysql_query($enlace , $sql);

if(!$result)
{

	echo"hubo problemas";
}
else
{
	echo"se ingreso correctamente"
}


?>