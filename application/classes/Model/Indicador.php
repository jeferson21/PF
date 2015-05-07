<?php defined('SYSPATH') or die('No direct script access.');

class Model_Indicador extends ORM {
  protected $_table_name = 'indicadores'; #definindo nome da tab no plural para o Kohana interpretar
  protected $_primary_key = 'idINDICADORES'; #definindo chave primária
  
  protected $_belongs_to = array(
	      'objetivo' => array(
	        'model' => 'Objetivo',
	        'foreign_key' => 'OBJETIVOS_idOBJETIVO'
	    )
  );

  protected $_has_many = array(
  		'metas' => array(
  			'model' => 'Meta',
  			'foreign_key' => 'INDICADORES_idINDICADORES'
		)
  );

}
