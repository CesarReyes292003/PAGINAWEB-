<?php
	$servidor = "localhost";
	$usuario = "id20416619_cesar";
	$password = "X|TWl(C\X\i(5]G*";
	$db = "id20416619_eventos";
	$conexion = new mysqli($servidor, $usuario, $password, $db);
	
	if ($conexion->connect_error){
		die("Conexion fallida: " . $conexion->connect_error);
    }

?>