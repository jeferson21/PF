<?php defined('SYSPATH') or die('No direct script access.');

class Model_Projeto extends ORM {
  protected $_primary_key = 'idPROJETO';
  protected $_desc_column = 'NOME_PROJ'; 

  	public function formata_data($data) {
   		return $data['ANO'].'-'.$data['MES'].'-'.$data['DIA'];
  	}

	protected $_belongs_to = array(
	      'objetivo' => array(
	        'model' => 'Objetivo',
	        'foreign_key' => 'OBJETIVOS_idOBJETIVO'
	    )
	);


	protected $_has_many = array(
		'importacao' => array(
  			'model' => 'Importacao',
  			'foreign_key' => 'PROJETOS_idPROJETO'
		)
	);


  	public function rules() {  #Validação dos campos
		return array(
			'NOME_PROJ'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50)) 
			),

			# Falta fazer a validação e preenchimento dos campos na edição para DATA #

			'RESPONSAVEL'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50)) 
			),
		);
   }   

}
