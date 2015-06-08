<?php defined('SYSPATH') or die('No direct script access.');

class Model_Perspectiva extends ORM {
  protected $_primary_key = 'idPERSPECTIVA'; #dizendo que a chave é matricula
  protected $_desc_column = 'DESCRICAO_PERSP';

	protected $_has_many = array(
	   'grupo' => array(
  			'model' => 'Grupo',
  			'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVA'
		),

  	   'itens' => array(
            'model' => 'item',
            'through' => 'ITENS_has_PERSPECTIVAS',
            'foreign_key' => 'PERSPECTIVAS_idPERSPECTIVA',
            'far_key' => 'ITENS_idITEM'
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
