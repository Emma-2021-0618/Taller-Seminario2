<?php 
	
	$host = 'localhost';
	$user = 'seminario';
	$password = 'seminario2023';
	$db = 'bancos';

	$conection = @mysqli_connect($host,$user,$password,$db);

	// if(!$conection){
	// 	echo "Error en la conexión a la Base Datos";}
	// else {
	// 	 echo "conexión exitosa"; 
	// }
	
?>