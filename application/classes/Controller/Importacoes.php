<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Importacoes extends Controller_Template { 

	public $template = 'templateWelcome';

  public function action_index() {     
      $importacoes=ORM::Factory('Importacao')->find_all();
      if(!isset($importacoes[0])) 
       $importacoes=array();          
       $this->template->content= View::Factory('templateImportacoes')
                                      ->bind('importacoes', $importacoes);
                                
  }

   public function action_importarXML() {
        $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
        $PROJETOS_idPROJETO = ORM::get_select('Projeto');
        $importacoes=ORM::Factory('Importacao')->find_all();

        if(HTTP_Request::POST == $this->request->method() && isset($_POST['arquivoXML'])) 
        {
          Helper_XML::xml_import($_POST['arquivoXML']);                         
        } 
        
          $this->template->content=View::Factory('templateImportacoes')
                                        ->bind('importacoes', $importacoes);
                                
    }
} 