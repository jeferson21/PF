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

  public function rules(){
    return array(
         'DESCRICAO_IND' => array ( 
            array('not_empty'),
            array('min_length', array(':value', 5)),
            array('max_length', array(':value', 100)) 
         ),

         'CONFIG_IND' => array ( 
            array('not_empty')
         )
     );
  }

  

}
