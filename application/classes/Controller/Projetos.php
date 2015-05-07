<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Projetos extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {
        $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');
        
        $projetos=ORM::Factory('Projeto')->find_all(); #Find encontra um elemento, find_all(); vários. 
          if(!isset($projetos[0])) 
              $projetos=array();
              $this->template->content= View::Factory('templateProjetos')
                    ->bind('projetos', $projetos)
                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);
    }


    public function action_salvar() { 
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');
       $projetos=ORM::Factory('Projeto')->find_all();
       $errors = array();    
       try{
            if(HTTP_Request::POST == $this->request->method()){ #verificando se o método é POST
                    $projeto = ORM::Factory('Projeto');
                    $_POST['DATA_INI']= $projeto->formata_data($_POST['DATA_INI']);
                    $_POST['DATA_FIM']= $projeto->formata_data($_POST['DATA_FIM']);
                    $projeto -> values($_POST);
                	$projeto -> save();
                	$this->redirect('Projetos');
             }        
        } catch (ORM_Validation_Exception $e){
            $errors = $e->errors('forms');
        }  #var_dump($errors);
    
        $this->template->content= View::Factory('templateProjetos')
            ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
            ->bind('projetos', $projetos)
            ->set('errors', $errors);
    }

    public function action_delete() {
        $idPROJETO = $this->request->param('id');        
        $projeto = ORM::Factory('Projeto', $idPROJETO)->delete();  
        $this->redirect('Projetos');
    }

    public function action_edit() { 
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');
       
        $idPROJETO = $this->request->param('id');
        // verificando se o método é post
        if(HTTP_Request::POST == $this->request->method()){
            $_POST['idPROJETO'] = $idPROJETO;
            $projeto = ORM::Factory('Projeto', $idPROJETO); 
            $_POST['DATA_INI']= $projeto->formata_data($_POST['DATA_INI']);
            $_POST['DATA_FIM']= $projeto->formata_data($_POST['DATA_FIM']);           
            $projeto -> values($_POST);
            $projeto -> save();            
        }         
        $projeto = ORM::Factory('Projeto',$idPROJETO);      
        $this->template->content= View::Factory('edit/editProjetos')
            ->set('projeto', $projeto)
            ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);
    }





} 