<?php defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {
	/*
	public function is_date(Validation $array, $field) {		
		$datas = explode("-", $array[$field]);
		var_dump(count($datas));
		if(count($datas) < 3 || !checkdate($datas[1], $datas[2], $datas[0]))
			$array->error($field, "is_date");
	} */
	
}
