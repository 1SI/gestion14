<?php

	require_once ($_SESSION['RAIZ'].'/controladores/Controller.php');
	require_once ($_SESSION['RAIZ'].'/vistas/View.php');
	
	class UsuariosC extends Controller {
		public function  UsuariosC(){
			parent::Controller(); // Llama al constructor de su padre. 
		}	
		
		/**
		 * Coge una vista y la devuelve a donde se ha hecho la llamada. 
		 * De esta forma, mostramos la vista "Usuarios"
		 */
		public function getVistaPrincipal(){
			$vista = new View();
			$vista->render($_SESSION['RAIZ'].'/vistas/Usuarios/UsuariosV.php');
		}
	}

?>
