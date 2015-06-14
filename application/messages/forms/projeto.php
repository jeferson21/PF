<?php defined('SYSPATH') or die('No direct script access.'); 

 return array(
 		'NOME_PROJ' => array (
 			'not_empty' => '  * O campo não pode estar vazio',
 			'min_length' => ' * O campo deve conter no mínimo 3 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 100 caractéres'
 		),

 		'RESPONSAVEL' => array (
 			'not_empty' => '  * O campo não pode estar vazio',
 			'min_length' => ' * O campo deve conter no mínimo 5 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 80 caractéres'
 		),

 	);