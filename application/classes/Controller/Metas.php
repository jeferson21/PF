<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Metas extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() { 
        $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
        $metas=ORM::Factory('Meta')->find_all();
        
        if(!isset($metas[0])) 
          $metas=array();
          $this->template->content = View::Factory('templateMetas')
                                       ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)
                                       ->bind('metas', $metas); 
    }

  public function action_salvar() {     
       $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
       $metas=ORM::Factory('Meta')->find_all();

       $errors = array();    
       try {
            if(HTTP_Request::POST == $this->request->method()){
                $meta = ORM::Factory('Meta');
                $meta -> values($_POST);
                $meta -> save();
                $this->redirect('Metas');
            }  
        } catch(ORM_Validation_Exception $e) {
            $errors = $e->errors('forms');
        }      
        
        $this->template->content= View::Factory('templateMetas')
                                       ->bind('metas', $metas)
                                       ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)
                                       ->set('errors', $errors); 
    }

    public function action_delete() {
        $idMETA = $this->request->param('id');        
        $meta = ORM::Factory('Meta',$idMETA)->delete(); 
        $this->redirect('Metas');
    }

    public function action_edit() {  
        $INDICADORES_idINDICADOR = ORM::get_select('Indicador');
        $idMETA = $this->request->param('id');
        $meta= ORM::Factory('Meta',$idMETA);
        $metas=ORM::Factory('Meta')->find_all();

        if(HTTP_Request::POST == $this->request->method()) { 
            $_POST['idMETA'] = $idMETA;
            $meta = ORM::Factory('Meta', $idMETA);            
            $meta -> values($_POST);
            $meta -> save();
            $this->redirect('Metas');
        }           
        
        if(!isset($metas[0]))
          $metas=array();
          $this->template->content= View::Factory('edit/editMetas')
                                      ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)
                                      ->set('meta', $meta)
                                      ->bind('metas', $metas);     
    }
        
} 