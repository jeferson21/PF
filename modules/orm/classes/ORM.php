<?php defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {
	
	public function is_date(Validation $array, $field) {		
		$datas = explode("-", $array[$field]);
		
	  	for($i=0;$i<=2;$i++) {
			  if(!isset($datas[$i]) || !is_numeric($datas[$i])) 
	  			$array->error($field, "is_date");
	  			return;
	  	}

			if(count($datas) < 3 || !checkdate($datas[1], $datas[2], $datas[0]))
				$array->error($field, "is_date");
			
	}

	public static function get_select($model){
		$object = ORM::Factory($model);
		$primary_key = $object->_primary_key;
		$desc_column = $object->_desc_column;		
		$object = $object->find_all();		
		return $object->as_array($primary_key, $desc_column);

	 	# Como se fosse:
	 	# $Variavel=ORM::Factory('Model')->find_all()->as_array('primary_key' ,'desc_column');
	}
	
	public static function get_select_ind_obj(){
		$select_array = array();
		$indicador = ORM::Factory('indicador')->find_all();
		foreach ($indicador as $value) {
			$desc_obj = ORM::Factory('indicador', $value->idINDICADOR)->objetivo->DESCRICAO_OBJ;
			$select_array[$value->idINDICADOR] = $value->TIPO_IND . ' - ' . $desc_obj;
		}
		#arsort($select_array);	
		return $select_array;
	}
	
}
