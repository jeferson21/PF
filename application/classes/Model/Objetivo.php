<?php defined('SYSPATH') or die('No direct script access.');

class Model_Objetivo extends ORM {
  
  protected $_primary_key = 'idOBJETIVO'; #dizendo qual é a chave primária
  protected $_desc_column = 'DESCRICAO_OBJ';
  
  protected $_has_many = array(
  	'projeto' => array(
  			'model' => 'Projeto',
  			'foreign_key' => 'OBJETIVOS_idOBJETIVO'
	   ),

     'item' => array(
        'model'=>'Item',
         'foreign_key' => 'OBJETIVOS_idOBJETIVO'
      ),

  	'indicador' => array(
  			'model' => 'Indicador',
  			'foreign_key' => 'OBJETIVOS_idOBJETIVO'
		 )
  );

  protected $_belongs_to = array(
      'grupo' => array(
        'model' => 'Grupo',
        'foreign_key' => 'GRUPOS_idGRUPO'
      ),
  );

  public function rules(){
     return array(
          'DESCRICAO_OBJ' => array( 
            array('not_empty'),
            array('min_length', array(':value', 5)),
            array('max_length', array(':value', 100)) 
         )
     );
  }

  public static function get_ind_details($id){
      $query = DB::select(array('i.idINDICADOR', 'INDICADORES_idINDICADOR'),
                  'im.VALOR','m.VERDE_INI', 'm.VERDE_LIM',
                  'i.TIPO_IND',
                  'm.AMARELO_LIM','m.VERMELHO_LIM')
          ->from(array('indicadores', 'i'))  
          ->join(array('importacoes','im'))
              ->on('i.idINDICADOR','=', 'im.INDICADORES_idINDICADOR')
          ->join(array('metas','m'))
              ->on('i.idINDICADOR','=', 'm.INDICADORES_idINDICADOR')
          ->where('i.OBJETIVOS_idOBJETIVO','=', $id)
              ->as_object()->execute();
      return $query;
  }

  public static function get_color($objetivos){
  
      $indicadores = Model_Objetivo::get_ind_details($objetivos['idOBJETIVO']);

      $color = 1;
      foreach ($indicadores as $indicador) {
            $color = $color * Model_Objetivo::get_indicador_color($indicador);
      }
      if($color == 1)
        return '#00FF00';
      if($color > 1)
        return 'FFFF00';
      if($color == 0)
        return 'FF0000';
  }

  public static function get_indicador_color($indicador){
      $color = 1;
      if($indicador->VALOR > $indicador->VERDE_LIM 
          && $indicador->VALOR < $indicador->AMARELO_LIM){
        $color = 2;
      }else if($indicador->VALOR > $indicador->AMARELO_LIM){
        $color = 0;
      }
      return $color;
  }

  public static function get_indicador_color_image($indicador){
    $color = Model_Objetivo::get_indicador_color($indicador);
      $path = 'media/img/';
      if($color == 1)
        return $path.'green_flag.png';
      if($color > 1)
        return $path.'yellow_flag.png';
      if($color == 0)
        return $path.'red_flag.png';
  }

}
