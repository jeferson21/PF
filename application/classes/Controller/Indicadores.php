<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indicadores extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {      
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');                   
       $INDICADORES_idINDICADOR = ORM::get_select('Indicador');                                    
       
      $indicadores=ORM::Factory('Indicador')->find_all();
      if(!isset($indicadores[0])) 
          $indicadores=array();               
       $this->template->content=View::Factory('templateIndicadores')
                                    ->bind('indicadores',$indicadores)
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR);
    }
      
    public function action_salvar() {
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');                   
       $INDICADORES_idINDICADOR = ORM::get_select('Indicador');                                                                        
       
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
                                    ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)                                    
                                    ->set('errors', $errors); 
    }

     public function action_delete() {
        $idINDICADOR = $this->request->param('id');        
        $indicador= ORM::Factory('Indicador',$idINDICADOR)->delete(); 
        $this->redirect('Indicadores');
    }

    public function action_edit() {  
        $idINDICADOR = $this->request->param('id'); 
        $indicador= ORM::Factory('Indicador',$idINDICADOR);      
        $indicadores=ORM::Factory('Indicador')->find_all();
        $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo'); 
        $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
        
        $errors=array();
        try {
            if(HTTP_Request::POST == $this->request->method()) { 
                $_POST['idINDICADOR'] = $idINDICADOR;
                $indicador = ORM::Factory('Indicador', $idINDICADOR);            
                $indicador -> values($_POST);
                $indicador -> save();            
            }
         } catch(ORM_Validation_Exception $e) {
          $errors = $e->errors('forms');
        }          
        
        $this->template->content= View::Factory('edit/editIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)
                                    ->set('indicador',$indicador)
                                    ->bind('indicadores', $indicadores)                                    
                                    ->set('errors', $errors); 
    }


} //end controller