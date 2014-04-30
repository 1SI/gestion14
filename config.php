<?php
	/*
	 * 
	 */

	// Si no está declarada la variable config en $_SESSION
	if (!isset($_SESSION['config'])){ 
		define('DIR_APLICACION', 'gestion14');
		define('RAIZ', $_SERVER['DOCUMENT_ROOT'].'/'.DIR_APLICACION); // RAIZ = ruta del proyecto
		$_SESSION['RAIZ'] = RAIZ; // Guardamos en $_SESSION la ruta del proyecto
		$_SESSION['config']=array(
			'DIR_APLICACION' => DIR_APLICACION, 		
		);
		
	}