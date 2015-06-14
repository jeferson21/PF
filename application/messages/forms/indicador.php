<?php defined('SYSPATH') or die('No direct script access.'); 

 return array(
 	'TIPO_IND' => array (
 		'not_empty' =>  ' * O campo não pode estar vazio',
 		'min_length' => ' * O campo deve conter no mínimo 5 caractéres',
 		'max_length' => ' * O campo deve conter no máximo 100 caractéres'
 	),

 	'CONFIG_IND' => array (
 		'not_empty' => '  * Insira um arquivo',
 	),
 );