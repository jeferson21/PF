<?php defined('SYSPATH') or die('No direct script access.');

class Model_Mapa extends ORM {
  protected $_primary_key = 'idME'; 
  protected $_desc_column = 'ANO';
  public $countObjetivos = 0;
  public $perspectivas = array();
  
  protected $_has_many = array(
  		'itens' => array(
  			'model' => 'Item',
  			'foreign_key' => 'MAPAS_idME'
		)
  );

  public function rules() {  #Validação dos campos
		return array(
			'MISSAO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 8)),
				array('max_length', array(':value', 400)) 
			),

			'VISAO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 8)),
				array('max_length', array(':value', 400)) 
			),

			'ANO'=> array ( 
				array('not_empty'),
				array('min_length', array(':value', 4)),
				array('max_length', array(':value', 5)) 
			)
		);
	}

	public function get_map() {
		$itens = $this->itens->find_all();
		$countObjetivos = array();
		$fullMap = array();		
		foreach ($itens as $key => $item) {
			$IdPerspectiva = $item->PERSPECTIVAS_idPERSPECTIVA;
			$grupo = $item->GRUPOS_idGRUPO;
			$objetivo = $item->OBJETIVOS_idOBJETIVO;
			$countObjetivos[$objetivo] = $objetivo;
			if(!isset($fullMap[$IdPerspectiva]))
				$fullMap[$IdPerspectiva]['perspectiva'] = 
					ORM::Factory('perspectiva',$IdPerspectiva)->as_array();

			if(!isset($fullMap[$IdPerspectiva]['grupos'][$grupo]))
				$fullMap[$IdPerspectiva]['grupos'][$grupo] = 
					ORM::Factory('grupo', $grupo)->as_array();

			if(!isset($fullMap[$IdPerspectiva]['grupos'][$grupo]['objetivos'][$objetivo]))
				$fullMap[$IdPerspectiva]['grupos'][$grupo]['objetivos'][$objetivo] = 
					ORM::Factory('objetivo', $objetivo)->as_array();	
		}	
			
		$this->countObjetivos = count($countObjetivos);		

		return $fullMap;
	}	
}


