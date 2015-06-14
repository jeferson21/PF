<?php defined('SYSPATH') or die('No direct script access.');

class Model_Objetivo extends ORM {
  
  protected $_primary_key = 'idOBJETIVO'; #dizendo qual é a chave primária
  protected $_desc_column = 'DESCRICAO_OBJ';
  
  protected $_has_many = array(
  	'projeto' => array(
  			'model' => 'Projeto',
  			'foreign_key' => 'OBJETIVOS_idOBJETIVO'
	   ),

     'item' => array(
        'model'=>'Item',
         'foreign_key' => 'OBJETIVOS_idOBJETIVO'
      ),

  	'indicador' => array(
  			'model' => 'Indicador',
  			'foreign_key' => 'OBJETIVOS_idOBJETIVO'
		 )
  );

  protected $_belongs_to = array(
      'grupo' => array(
        'model' => 'Grupo',
        'foreign_key' => 'GRUPOS_idGRUPO'
      ),
  );

  public function rules(){
     return array(
          'DESCRICAO_OBJ' => array( 
            array('not_empty'),
            array('min_length', array(':value', 5)),
            array('max_length', array(':value', 100)) 
         )
     );
  }

  public static function get_color($indicadores){
    #echo Debug::vars($indicadores);
    if(end($indicadores)['idINDICADOR'] >1)
      return '#00FF00';
    else
      return '#FF0000';
  }

}
