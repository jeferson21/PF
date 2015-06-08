<?php defined('SYSPATH') or die('No direct script access.');

class Model_Mapa extends ORM {
  protected $_primary_key = 'idME'; 
  protected $_desc_column = 'ANO';
  
  protected $_has_many = array(
  		'itens' => array(
  			'model' => 'Item',
  			'foreign_key' => 'MAPAS_idME'
		)
  );

  public function rules() {  #Validação dos campos
		return array(
			'MISSAO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 8)),
				array('max_length', array(':value', 400)) 
			),

			'VISAO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 8)),
				array('max_length', array(':value', 400)) 
			),

			'ANO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 5)) 
			)
		);
	}
}


