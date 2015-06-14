<?php defined('SYSPATH') or die('No direct script access.');

class Model_Grupo extends ORM {
  protected $_primary_key = 'idGRUPO'; #dizendo que a chave é matricula
  protected $_desc_column = 'CATEGORIA';

  protected $_has_many = array(
  		'objetivo' => array(
  			'model' => 'Objetivo',
  			'foreign_key' => 'GRUPOS_idGRUPO'
		  ),

      'item' => array(
        'model'=>'Item',
         'foreign_key' => 'GRUPOS_idGRUPO'
      )
  );

  protected $_belongs_to = array(
      'perspectiva' => array(
        'model' => 'Perspectiva',
        'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVA'
       ),

      'item' => array(
        'model'=>'Item',
         'foreign_key' => 'GRUPOS_idGRUPO'
       ),
  );


  public function rules() {
  	 return array(
  	 	'CATEGORIA'	=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50)) 
		 )

  	 );


  }
}
