<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indicadores extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()
                                   ->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');

        $INDICADORES_idINDICADORES = ORM::Factory('Indicador')
                                    ->find_all()->as_array('idINDICADORES','DESCRICAO_IND');
        $ITENS_idITENS = ORM::Factory('Item')
                                    ->find_all()->as_array('idITENS','idITENS');

       $this->template->content=View::Factory('templateIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADORES', $INDICADORES_idINDICADORES)
                                    ->set('ITENS_idITENS', $ITENS_idITENS);                                 
    }
      
    public function action_salvar() {
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');

        $INDICADORES_idINDICADORES = ORM::Factory('Indicador')
                                    ->find_all()->as_array('idINDICADORES','DESCRICAO_IND');
        $ITENS_idITENS = ORM::Factory('Item')
                                    ->find_all()->as_array('idITENS','idITENS');

        $errors=array();
        try {
            if(HTTP_Request::POST == $this->request->method()) {
                $indicador = ORM::Factory('Indicador');
            	$indicador -> values($_POST);
                $indicador -> save();
            	$this->redirect('Indicadores');
            }
        } catch(ORM_Validation_Exception $e) {
          $errors = $e->errors('forms');
        }

        $this->template->content= View::Factory('templateIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADORES', $INDICADORES_idINDICADORES)
                                    ->set('ITENS_idITENS', $ITENS_idITENS)
                                    ->set('errors', $errors); 

    }


    public function action_importarXML() {
        
        

        if(HTTP_Request::POST == $this->request->method() && isset($_POST['arquivoXML'])) {            
            Helper_XML::xml_import($_POST['arquivoXML'], $_POST['INDICADORES_idINDICADORES'], $_POST['ITENS_idITENS']);                    
        } 
        
        $INDICADORES_idINDICADORES = ORM::get_select('Indicador');
        $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');
        $ITENS_idITENS = ORM::get_select('Item');

        $this->template->content=View::Factory('templateIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('ITENS_idITENS', $ITENS_idITENS)
                                    ->set('INDICADORES_idINDICADORES', $INDICADORES_idINDICADORES);  
    }

} //end