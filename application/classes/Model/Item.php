<?php defined('SYSPATH') or die('No direct script access.');

class Model_Item extends ORM {
  protected $_table_name = 'itens'; #definindo nome da tab no plural p/ o Kohana interpretar
  protected $_primary_key = 'idITENS'; #definindo chave primária
 
  protected $_belongs_to = array(
	  'mapa' => array(
	        'model' => 'Mapa'
	        'foreign_key' => 'ME_idME'
	    )
	);

}