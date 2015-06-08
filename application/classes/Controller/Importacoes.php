<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Importacoes extends Controller_Template { 

	public $template = 'templateWelcome';

   public function action_index() {    
      $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
      $ITENS_idITEM = ORM::get_select('Item');

      $importacoes=ORM::Factory('Importacao')->find_all();
      if(!isset($importacoes[0])) 
       $importacoes=array();          
       $this->template->content= View::Factory('templateImportacoes')
                                ->bind('importacoes', $importacoes)
                                ->set('INDICADORES_idINDICADOR',$INDICADORES_idINDICADOR)
                                ->set('ITENS_idITEM', $ITENS_idITEM);                
    }

  	 public function action_importarXML() {
        $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
        $ITENS_idITEM = ORM::get_select('Item');

        if(HTTP_Request::POST == $this->request->method() && isset($_POST['arquivoXML'])) 
        {
           Helper_XML::xml_import($_POST['arquivoXML'], $_POST['INDICADORES_idINDICADOR'],
                                  $_POST['ITENS_idITEM']);                    
        } 
        
          $this->template->content=View::Factory('templateImportacoes')
                                ->set('INDICADORES_idINDICADOR',$INDICADORES_idINDICADOR)
                                ->set('ITENS_idITEM', $ITENS_idITEM);
    }
} 