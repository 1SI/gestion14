<?php

$menu = array(
		0=>array('texto'=>'Usuario', 'url'=>'aplicacion.php?c=Usuarios'),
		1=>array(
				'texto'=>'Personal', 
				'url'=>'#', 
				'opciones' => array(
					0=>array('texto' => 'Contratos', 'url' => '#'),
					1=>array('texto' => 'Nominas', 'url'=>'#')
				)
		),
		2=>array(
			'texto'=>'Adminsitracion', 
			'url'=>'#', 
			'opciones'=> array(
				0=>array(
						'texto' => 'Facturas', 
						'url' => '#'
				),
				1=>array(
						'texto' => 'Pedidos', 
						'url'=>'#'
				)
			)
		),
				
		3=>array('texto'=>'Almacen', 'url'=>'#'),
		4=>array(
				'texto'=>'Ayuda', 
				'url'=>'#',
				'opciones' => array(
					0=>array('texto' => 'Facturas', 'url' => '#'),
					1=>array('texto' => 'Pedidos', 'url'=>'#')
				)
		)
);


function getMenuArray($menu) {
	$html = '<ul>';
	foreach ($menu as $posicion => $opcion){
		$html.='<li><a href="'.$opcion['url'].'">'.$opcion['texto'].'</a>';
		if(isset($opcion['opciones'])){
			$html.='<ul>';
			foreach ($opcion['opciones'] as $subopcion){
				$html.='<li><a href="'.$subopcion['url'].'">'.$subopcion['texto'].'</a></li>';
			}
			$html .= '</ul>';
		}
		$html.='</li>';
	}
		
	
	$html.='</ul>';
	
	return $html;
}

/*
 * 
 */
function getMenuHTML(){
	$html = '<ul>
			<li><a href="#">Usuarios</a></li> 
			<li><a href="#">Personal</a>
				<ul>
					<li>
						<a href="#">Contratos</a> 
					</li>
						
					<li>
						<a href="#">Nominas</a>
					</li>
				</ul> 
			</li>
			<li><a href="#">Administración</a>
				<ul>
					<li>
						<a href="#">Facturas</a> 
					</li>
					<li>
						<a href="#">Pedidos</a>
					</li>
				</ul> 
			</li>
			<li><a href="#">Almacén</a></li> 
			<li><a href="#">Ayuda</a></li>
		</ul>';
	return $html;
}