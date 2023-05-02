<?php
session_start();
$nombre = $_SESSION['nombre'];

if (isset($_SESSION['nombre'])){
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pagina principal</title>
</head>
<body>
	<?php echo 'Bienvenido(a)'.$nombre;?>
	<br /><br />
	<a href="salir.php">Cerrar sesion</a>
</body>
</html>
<?php
	}else{
		header('Location: index.php');
	}
?>