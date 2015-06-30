<?php

defined('SYSPATH') OR die('No direct script access.');

class Helper_XML {    
    
    public static function xml_import($file) {
        $xml = simplexml_load_file($file);
        foreach ($xml as $indicador_xml){
        	
        	$importacao = ORM::Factory('Importacao');
        	$importacao_array = get_object_vars($indicador_xml); 
            $idINDICADOR = $importacao_array['INDICADORES_idINDICADOR'];
                $delete = DB::delete('importacoes')
                         ->where('INDICADORES_idINDICADOR', '=', $idINDICADOR)
                         ->execute();
        
            $importacao_array['VALOR'] = array_sum($importacao_array['VALOR']) / count($importacao_array['VALOR']);            
            $dates = $importacao_array['DATA'];
            $dates = array_combine($dates, array_map('strtotime',$dates));
            arsort($dates); #ordena de forma decrescente 
            reset($dates); #volta pro top array
            $importacao_array['DATA'] = key($dates);
            $importacao->values($importacao_array);
            $importacao->save();                    
        }        
    }
}

?>
