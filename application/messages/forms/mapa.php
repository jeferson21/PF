<?php defined('SYSPATH') or die('No direct script access.'); 

 return array(
 		
 		'MISSAO' => array (
 			'not_empty' => '  * O campo não pode estar vazio',
 		  	'min_length' => ' * O campo deve conter no mínimo 8 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 400 caractéres'
 		 ),

 		'VISAO' => array ( 
 			'not_empty' => '  * O campo não pode estar vazio', 
 		 	'min_length' => ' * O campo deve conter no mínimo 8 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 400 caractéres'
 		 ),
 	
 		'ANO' => array (
 			'not_empty' => '  * O campo não pode estar vazio', 
 		 	'min_length' => ' * O campo deve conter no mínimo 4 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 5 dígitos'
 		 )	
  );