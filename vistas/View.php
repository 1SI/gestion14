<?php
 Class View {
 	function __construct(){
 		// M�todo constructor 
 		
 	}
 	
 	public function render($vista){
 		include($vista);
 	}
 }