<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indicadores extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()
                                    ->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');
       $this->template->content=View::Factory('templateIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);;
    }
      
    public function action_salvar() {
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()
                                    ->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');
        $errors=array();
        try {
            if(HTTP_Request::POST == $this->request->method()){

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
                                    ->set('errors', $errors); 
    }

} 