<?php defined('SYSPATH') or die('No direct script access.');

class Model_Perspectiva extends ORM {
  protected $_primary_key = 'idPERSPECTIVA'; #dizendo que a chave é matricula
    
	protected $_has_many = array(
		'grupo' => array(
  			'model' => 'Grupo',
  			'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVA'
		),
  		'itens' => array(
            'model' => 'item',
            'through' => 'PERSPECTIVAS_has_ITENS',
            'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVAS',
            'far_key' => 'ITENS_idITENS'
        ),
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
