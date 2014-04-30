<?php 
$msj = '';


if (isset($_POST['usuario'])) {
	if ($_POST['usuario']=='Castaña' && $_POST['pass']=='123456'){
		header('location: index.php');
	}
	else {
		$msj='Identificación incorrecta.<br>';
	}
}

?>

<!DOCTYPE HTML>
<html lang="es-es">
	<head>
	
	</head>
	<body>
		<form method="POST" action="#">
			Usuario: <input type="text" 
							id="usuario" 
							name="usuario"
							size="40"
							value="<?php echo $_POST['usuario']; ?>">
			Contraseña: <input type="password" id="pass" name="pass" size="40">
			<input type="submit" value="Aceptar">
		</form>
	</body>
</html>