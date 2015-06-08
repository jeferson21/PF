 <?php defined('SYSPATH') or die('No direct script access.'); 

 return array(
 		'DESCRICAO_MET' => array (
 			'not_empty' =>  '   * O campo não pode estar vazio',
 			'min_length' => '   * O campo deve conter no mínimo 5 caractéres',
 			'max_length' => '   * O campo deve conter no máximo 140 caractéres' 
 		 ),

 		'ANO' => array (
 			'not_empty' =>  '  * O campo não pode estar vazio', 
 		 	'min_length' => ' * O campo deve conter no mínimo 4 dígitos',
 		 	'max_length' => ' * O campo deve conter no máximo 5 dígitos'
 		 ),

 		'VERMELHO_INI' => array (
 			'not_empty' =>  '    * O campo não pode estar vazio',
 			'min_length' => '   * O campo deve conter no mínimo 1 caractéres',
 			'max_length' => '   * O campo deve conter no máximo 30 caractéres' 
 		 ),

 		'VEMELHO_LIM' => array (
 			'not_empty' =>  '    * O campo não pode estar vazio',
 			'min_length' => '   * O campo deve conter no mínimo 1 caractéres',
 			'max_length' => '   * O campo deve conter no máximo 30 caractéres' 
 		 ),

 		'AMARELO_INI' => array (
 			'not_empty' =>  '    * O campo não pode estar vazio',
 			'min_length' => '   * O campo deve conter no mínimo 1 caractéres',
 			'max_length' => '   * O campo deve conter no máximo 30 caractéres' 
 		 ),

 		'AMARELO_LIM' => array (
 			'not_empty' =>  '    * O campo não pode estar vazio',
 			'min_length' => '   * O campo deve conter no mínimo 1 caractéres',
 			'max_length' => '   * O campo deve conter no máximo 30 caractéres' 
 		 ),

 		'VERDE' => array (
 			'not_empty' =>  '    * O campo não pode estar vazio',
 			'min_length' => '   * O campo deve conter no mínimo 1 caractéres',
 			'max_length' => '   * O campo deve conter no máximo 30 caractéres' 
 		 ),
 );