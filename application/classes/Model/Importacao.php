<?php defined('SYSPATH') or die('No direct script access.');

class Model_Importacao extends ORM {
  protected $_table_name = 'importacoes'; #definindo nome da tab no plural para o Kohana interpretar
  protected $_primary_key = 'idIMPORTACAO'; #definindo chave primária
  
  protected $_belongs_to = array(
	      'indicador' => array(
	        'model' => 'Indicador',
	        'foreign_key' => 'INDICADORES_idINDICADOR'
       ),
        
        'projeto' => array(
          'model' => 'Projeto',
          'foreign_key' => 'PROJETOS_idPROJETO'
      )
  );    
}
