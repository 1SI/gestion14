<?php
 Class View {
 	function __construct(){
 		// Método constructor 
 		
 	}
 	
 	public function render($vista){
 		include($vista);
 	}
 }