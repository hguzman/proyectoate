<?php
	
	$cedula=$_POST["ced"];
	$nombre=$_POST["nom"];
	$direccion=$_POST["dir"];
	$db = mysql_connect("localhost", "root","");
	mysql_select_db("sirem",$db);
	$sql ="insert into asociado value('$cedula','$nombre','$direccion')";
	$result = mysql_query($sql);
	
?>

<h1>Asociado Creado correctament</h1>

<a href="sirem.html">Regresar</a>