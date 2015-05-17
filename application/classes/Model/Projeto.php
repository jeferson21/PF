<?php defined('SYSPATH') or die('No direct script access.');

class Model_Projeto extends ORM {
  protected $_primary_key = 'idPROJETO'; #dizendo qual é a chave primária

  	public function formata_data($data) {
   		return $data['ANO'].'-'.$data['MES'].'-'.$data['DIA'];
  	}

	protected $_belongs_to = array(
	      'objetivo' => array(
	        'model' => 'Objetivo',
	        'foreign_key' => 'OBJETIVOS_idOBJETIVO'
	    )
	);

  	public function rules() {  #Validação dos campos
		return array(
			'NOME_PROJ'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50)) 
			),

			# Falta fazer a validação e complemento dos campos na edição para DATA #

			'DATA_INI'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array(array($this, 'is_date'), array(':validation',':field'))
			),	


			'GERENTE'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50)) 
			),
		);
   }   

}
