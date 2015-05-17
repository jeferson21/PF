<?php defined('SYSPATH') or die('No direct script access.'); 

 return array(
 		'NOME_PROJ' => array (
 			'not_empty' => '  * O campo não pode estar vazio',
 			'min_length' => ' * O campo deve conter no mínimo 3 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 100 caractéres'
 		),

 		'GERENTE' => array (
 			'not_empty' => '  * O campo não pode estar vazio',
 			'min_length' => ' * O campo deve conter no mínimo 5 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 80 caractéres'
 		),


 		#com erro.
 		
 		'DATA_INI' => array (
 			'not_empty' => '  * O campo não pode estar vazio',
 			'min_length' => ' * O campo deve conter no mínimo 2 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 4 caractéres',
 		 	'is_date' => ' * O campo data não pode estar incompleto'
 		)
 	);