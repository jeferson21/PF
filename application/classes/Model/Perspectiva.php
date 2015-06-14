<?php defined('SYSPATH') or die('No direct script access.');

class Model_Perspectiva extends ORM {
  protected $_primary_key = 'idPERSPECTIVA'; #dizendo que a chave é matricula
  protected $_desc_column = 'DESCRICAO_PERSP';

	protected $_has_many = array(
	   'grupo' => array(
  			'model' => 'Grupo',
  			'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVA'
		  ),
     
     'item' => array(
        'model'=>'Item',
         'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVA'
      ),
  );

  protected $_belongs_to = array(

  );

  public function rules() {   #Validação dos campos
		return array(
			'DESCRICAO_PERSP' => array (
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50))
			)
		);

	}


}
