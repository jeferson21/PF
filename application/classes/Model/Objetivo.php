<?php defined('SYSPATH') or die('No direct script access.');

class Model_Objetivo extends ORM {
  
  protected $_primary_key = 'idOBJETIVO'; #dizendo qual é a chave primária
  
  protected $_has_many = array(
  	'projeto' => array(
  			'model' => 'Projeto',
  			'foreign_key' => 'OBJETIVO_idOBJETIVO'
	    ),

  	'indicador' => array(
  			'model' => 'Indicador',
  			'foreign_key' => 'OBJETIVO_idOBJETIVO'
		 ),

  	'mapa' => array(
  			'model' => 'Mapa',
  			'foreign_key' => 'OBJETIVO_idOBJETIVO'
		 )
  );

  protected $_belongs_to = array(
      'grupo' => array(
        'model' => 'Grupo',
        'foreign_key' => 'GRUPOS_idGRUPO'
    )
  );

  public function rules(){
     return array(
          'DESCRICAO_OBJ' => array ( 
            array('not_empty'),
            array('min_length', array(':value', 5)),
            array('max_length', array(':value', 100)) 
         )
     );
  }

}
