<?php defined('SYSPATH') or die('No direct script access.');

class Model_Meta extends ORM {
  protected $_primary_key = 'idMETA';
  protected $_desc_column = 'DESCRICAO_MET';

  protected $_belongs_to = array(
	    'indicador' => array(
	        'model' => 'Indicador',
	        'foreign_key' => 'INDICADORES_idINDICADOR'
	    )
  );
  
  public function rules() {  
		return array(
			'DESCRICAO_MET'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 5)),
				array('max_length', array(':value', 140)) 
			),

			'ANO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 5)) 
			),

			
			'VERDE_INI'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 30)) 
			),
			
			'VERDE_LIM'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 30)) 
			),

			'AMARELO_LIM'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 30)) 
			),

			'VERMELHO_LIM'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 1)),
				array('max_length', array(':value', 30)) 
			)
			

        );
	}

}
