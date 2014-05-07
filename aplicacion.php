


<?php 
	/*
	 * Session_start es necesaria para poder acceder a la variable $_SESSION. 
	 * IMPRESCINDIBLE que sea la primera instrucción de todas. Si no, no chuta. 
	 */
	session_start(); 
	//PARA CREAR EL LOGO: http://es.cooltext.com
	require_once 'config.php';
	require_once 'codigo/menu.php';
?>

<!DOCTYPE HTML>
<html lang="es">
<link rel="stylesheet" href="css/gestion.css" type="text/css" />
<link rel="stylesheet" href="css/menu.css" type="text/css" />
<head>
<title>Gestion de negocio</title>
</head>
<body>
	<header id="encabezado" class="lienzo tabla">
		<section class="fila">
			<article class="celda" id="celda-logo">
				<img src="imagenes/logo.jpg" title="Gestion 1SI 2014"
					style="height: 35px" />
			</article>
			<article class="celda" id="celda-titular">
				<span id="titular">The Big potato</span>
			</article>
			<article class="celda" id="celda-salir">
				<a href="login.php?salir=S"><img src="imagenes/salir.gif"
					title="Salir de la aplicación" id="icono-salir" /> </a>
			</article>
		</section>
	</header>
	<article id="ar-menu" class="menu lienzo">
	<?php 
		echo getMenuArray($menu);
		echo $_SESSION['RAIZ'];
	?>
	

	</article>
	<article id="ar-contenido" class="lienzo">
	<?php 
	
		/**
		 * Carga el fichero del controlador 
		 * @var unknown_type
		 */
	if (isset($_GET['c'])){ // Comprueba que existe la variable 'c' en la URL
		$controlador=$_GET['c'].'C'; // Pilla la variable "c" que está en la URL y le añade C
		if (file_exists('controladores/'.$controlador.'.php')){ // Comprueba que exista la clase antes de crear el objeto
			require_once 'controladores/'.$controlador.'.php'; // Importa el código del controlador
			$objModulo = new $controlador(); // Crea el objeto del controlador
			$objModulo->getVistaPrincipal(); // Llama al método getVistaPrincipal del controlador. Como poner Objeto.metodo() en Java. Lo mismo. 
		}
	}
	?>

	</article>
	<footer id="pie" class="lienzo">
		<p>&copy; 2014 1SI.</p>
	</footer>
</body>
</html>
