<?php defined('SYSPATH') or die('No direct script access.');

class Model_Projeto extends ORM {
  protected $_primary_key = 'idPROJETO';
  protected $_desc_column = 'NOME_PROJ'; 

  	public function formata_data($data) {
   		return $data['ANO'].'-'.$data['MES'].'-'.$data['DIA'];
  	}

  	public function get_datas(){
  		$data_ini = $this->explode_dates($this->DATA_INI);
  		$data_fim = $this->explode_dates($this->DATA_FIM);
  		return array('DATA_INI' => $data_ini, 'DATA_FIM' => $data_fim);
  	}

  	public function explode_dates($data){
  		$data = explode('-', $data);
  		return array('DIA' => $data[2], 'MES' => $data[1], 'ANO' => $data[0]);
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

			'RESPONSAVEL'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 50)) 
			),

			'DATA_INI'=> array ( 
				array(array($this, 'is_date'), array(':validation',':field')),
			),

			'DATA_FIM'=> array ( 
				array(array($this, 'is_date'), array(':validation',':field')),
			)

			# Falta fazer a validação e preenchimento dos campos na edição para DATA #

		);
   }   

}
