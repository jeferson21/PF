<?php defined('SYSPATH') or die('No direct script access.');

class Model_Item extends ORM {
  protected $_table_name = 'itens';    #definindo nome da tabela
  protected $_primary_key = 'idITEM';  #definindo chave primária
  protected $_desc_column = 'idITEM';
 
  protected $_belongs_to = array(
	  	'mapa' => array(
	        'model' => 'Mapa',
	        'foreign_key' => 'MAPAS_idME'
	    ),

	  	'perspectiva' => array(
        	'model' => 'Perspectiva',
        	'foreign_key' => 'PERSPECTIVA_idPERSPECTIVA'
		  ),

      'grupo' => array(
        'model' => 'Grupo',
        'foreign_key' => 'GRUPOS_idGRUPO'
      ),

      'objetivo' => array(
        'model' => 'Objetivo',
        'foreign_key' => 'OBJETIVOS_idOBJETIVO'
      ),

	);

}