<?php

defined('SYSPATH') OR die('No direct script access.');

class Helper_XML {    
    
    public static function xml_import($file, $indicador, $item) {
        $xml = simplexml_load_file($file);
        foreach ($xml as $indicador_xml){
        	$importacao = ORM::Factory('Importacao');
        	$importacao_array = get_object_vars($indicador_xml);
        	$importacao_array['ITENS_idITEM'] = $item;
        	$importacao_array['INDICADORES_idINDICADOR'] = $indicador;        	    
        	$importacao->values($importacao_array);
        	$importacao->save();	    		    
		}        
    }

}

?>
