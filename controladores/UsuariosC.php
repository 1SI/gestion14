<?php

	require_once ($_SESSION['RAIZ'].'/controladores/Controller.php');
	require_once ($_SESSION['RAIZ'].'/vistas/View.php');
	
	class UsuariosC extends Controller {
		public function  UsuariosC(){
			parent::Controller(); // Llama al constructor de su padre. 
		}	
		
		public function getVistaPrincipal(){
			$vista = new View();
			$vista->render($_SESSION['RAIZ'].'/vistas/Usuarios/UsuariosV.php');
		}
	}

?>
