<!DOCTYPE HTML>
<html lang="es-es">
	<head>
	
	</head>
	<body>
		Página creada por:
		<?php
			// define('NOMBRE','Alejandro Sáez');
			// $nombre = 'Dolareh';
			// echo NOMBRE.'<br/>';
			// echo $nombre.'<br/>';
		?>
		<br/>
		<?php
			echo 'Saludos de '.$nombre;
			echo "Saludos de $nombre";
			$nombres[] = 'Juan';
			$nombres[] = 'Pedro';
			$nombres[] = 'Jonathan';
			print_r($nombres);
			$nombres2 = array('Ivan', 'Sergio', 'Victor');
			echo '<br>';
			print_r($nombres2);
			echo '<br>';
			foreach($nombres2 as $indice=>$valor){
				echo "en la posicion $indice el valor es $valor<br>";
			}
			
			//Array asociativo
			/*
			Comentario
			*/
			$nombres3 = array(
				'Sergio'=>23,
				'Ivan'=>19,
				'Juan'=>28
			);
			foreach($nombres3 as $indice=>$valor){
				echo "La edad de $indice es $valor<br>";
			}
		?>
		
		
	</body>
</html>