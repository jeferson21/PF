<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Perspectivas extends Controller_Template { /* Controller_Template é uma classe do Kohana */

	public $template = 'templateWelcome';

	public function action_index() {
       $perspectivas=ORM::Factory('Perspectiva')->find_all();
        if(!isset($perspectivas[0])) 
          $perspectivas=array();
        $this->template->content= View::Factory('TemplatePerspectivas')
        ->bind('perspectivas', $perspectivas);
    }

    public function action_salvar() {
       $perspectivas=ORM::Factory('Perspectiva')->find_all();
       $errors = array();    
       try {
            if(HTTP_Request::POST == $this->request->method()){ #verificando se o método é POST
                $perspectiva = ORM::Factory('Perspectiva');
                $perspectiva -> values($_POST);
                $perspectiva -> save();
                $this->redirect('Perspectivas');
            }
        } catch(ORM_Validation_Exception $e) {
            $errors = $e->errors('forms');
        }

         $this->template->content= View::Factory('templatePerspectivas')
                                        ->bind('perspectivas', $perspectivas)
                                        ->set('errors', $errors);
    }   

    public function action_delete() {
        $idPERSPECTIVA = $this->request->param('id');        
        $perspectiva= ORM::Factory('Perspectiva',$idPERSPECTIVA)->delete(); 
        $this->redirect('Perspectivas');
    }

    public function action_edit() {  
        $perspectivas=ORM::Factory('Perspectiva')->find_all(); 
        $idPERSPECTIVA = $this->request->param('id');
        $perspectiva= ORM::Factory('Perspectiva',$idPERSPECTIVA); 
               
        if(HTTP_Request::POST == $this->request->method()) { 
            $_POST['idPERSPECTIVA'] = $idPERSPECTIVA;
            $perspectiva = ORM::Factory('Perspectiva', $idPERSPECTIVA);            
            $perspectiva -> values($_POST);
            $perspectiva -> save();
            $this->redirect('Perspectivas');
        }         
        $this->template->content= View::Factory('edit/editPerspectivas')
                                        ->set('perspectiva', $perspectiva)
                                        ->bind('perspectivas', $perspectivas);
    }
} 