<?php defined('SYSPATH') or die('No direct script access.');

class Model_Item extends ORM {
  protected $_table_name = 'itens'; #definindo nome da tab no plural p/ o Kohana interpretar
  protected $_primary_key = 'idITENS'; #definindo chave primária
  protected $_desc_column = 'idITENS';
 
  protected $_belongs_to = array(
	  	'mapa' => array(
	        'model' => 'Mapa',
	        'foreign_key' => 'ME_idME'
	    ),
	  	'importacoes' => array(
        	'model' => 'Importacao',
        	'foreign_key' => 'idIMPORTACAO'
		),
	);
  protected $_has_many = array(
  		'perspectivas' => array(
            'model' => 'perspectiva',
            'through' => 'PERSPECTIVAS_has_ITENS',
            'foreign_key' => 'ITENS_idITENS',
            'far_key' => 'PERSPECTIVAS_idPERSPECTIVA'
        ),
  	);

}