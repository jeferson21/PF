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

	  	'importacoes' => array(
        	'model' => 'Importacao',
        	'foreign_key' => 'idIMPORTACAO'
		),
	);

  protected $_has_many = array(
  		'perspectivas' => array(
            'model' => 'perspectiva',
            'through' => 'ITENS_has_PERSPECTIVAS',
            'foreign_key' => 'ITENS_idITEM',
            'far_key' => 'PERSPECTIVAS_idPERSPECTIVA'
        ),
  	);

}