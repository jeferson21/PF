<?php defined('SYSPATH') or die('No direct script access.');

class Model_Indicador extends ORM {
  protected $_table_name = 'indicadores'; #definindo nome da tab no plural para o Kohana interpretar
  protected $_primary_key = 'idINDICADOR'; #definindo chave primária
  protected $_desc_column = 'TIPO_IND';
  
  protected $_belongs_to = array(
	      'objetivo' => array(
	        'model' => 'Objetivo',
	        'foreign_key' => 'OBJETIVOS_idOBJETIVO'
	    )
  );

  protected $_has_many = array(
  		'meta' => array(
  			'model' => 'Meta',
  			'foreign_key' => 'INDICADORES_idINDICADOR'
		  ),
      
     'importacoes' => array(
        'model' => 'Importacao',
        'foreign_key' => 'INDICADORES_idINDICADOR'
      ),

      'item' => array(
        'model'=>'Item',
         'foreign_key' => 'INDICADORES_idINDICADOR'
      ),

  );

  public function rules(){
    return array(
         'TIPO_IND' => array ( 
            array('not_empty'),
            array('min_length', array(':value', 5)),
            array('max_length', array(':value', 100)) 
         ),
     );
  }

   

}
