<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Objetivos extends Controller_Template { 

	public $template = 'templateWelcome';

  public function action_getObjetivos(){
    $this->auto_render = false;
    $grupo = $this->request->POST('grupo');
    $objetivos = ORM::Factory('Grupo', $grupo)->objetivo->find_all(); 
    foreach ($objetivos as $key => $objetivo) {
      echo form::checkbox('objetivo[]', $objetivo->idOBJETIVO, false, 
        array('id' => 'checkObjetivos'.$objetivo->idOBJETIVO)) . " " . $objetivo->DESCRICAO_OBJ . "<br><br>";

        echo "<div class='objetivo' id='objetivos{$objetivo->idOBJETIVO}'>"."</div>";
    }
  }

    public function action_index() {
        $GRUPOS_idGRUPO = ORM::Factory('Grupo')->find_all()->as_array('idGRUPO' ,'CATEGORIA'); 
        $objetivos=ORM::Factory('Objetivo')->find_all(); // lista todos os elementos da tab Objetivo
          if(!isset($objetivos[0])) 
              $objetivos=array();
              $this->template->content= View::Factory('templateObjetivos')
              ->bind('objetivos', $objetivos)
              ->set('GRUPOS_idGRUPO', $GRUPOS_idGRUPO);
     }

    public function action_salvar() {
       $GRUPOS_idGRUPO = ORM::Factory('Grupo')->find_all()->as_array('idGRUPO' ,'CATEGORIA');
       $objetivos=ORM::Factory('Objetivo')->find_all(); //Find encontra um elemento, find_all(); vários. 
       $errors = array();    
       try {
            if(HTTP_Request::POST == $this->request->method()){ #verificando se o método é POST
                $grupo = ORM::Factory('Objetivo');
                $grupo -> values($_POST);
                $grupo -> save();
                $this->redirect('Objetivos');
            }  
        } catch(ORM_Validation_Exception $e) {
            $errors = $e->errors('forms');
        }
            $this->template->content= View::Factory('templateObjetivos')
                ->set('GRUPOS_idGRUPO',$GRUPOS_idGRUPO)
                ->bind('objetivos', $objetivos)
                ->set('errors', $errors);
    }

    public function action_details(){
      $idOBJETIVO = $this->request->param('id');
      $objetivo = ORM::Factory('objetivo', $idOBJETIVO);
      $indicadores = $objetivo->get_ind_details($idOBJETIVO);
      $this->template->content= View::Factory('templateObjetivosDetails')                
                ->set('indicadores', $indicadores)
                ->set('objetivo', $objetivo);             
    }

    public function action_delete() {
        $idOBJETIVO = $this->request->param('id');        
        $objetivo = ORM::Factory('Objetivo', $idOBJETIVO)->delete();  
        $this->redirect('Objetivos');
    }

    public function action_edit() { 
      $GRUPOS_idGRUPO = ORM::Factory('Grupo')->find_all()->as_array('idGRUPO' ,'CATEGORIA');
      $idOBJETIVO = $this->request->param('id');
      $objetivo = ORM::Factory('Objetivo',$idOBJETIVO);
      $objetivos=ORM::Factory('Objetivo')->find_all();      

        // verificando se o método é post
        if(HTTP_Request::POST == $this->request->method()){
            $_POST['idOBJETIVO'] = $idOBJETIVO;
            $objetivo = ORM::Factory('Objetivo', $idOBJETIVO);            
            $objetivo -> values($_POST);
            $objetivo -> save();  
            $this->redirect('Objetivos');
        }         
        
        $this->template->content= View::Factory('edit/editObjetivos')
            ->set('objetivo', $objetivo)
            ->bind('objetivos', $objetivos)
            ->set('GRUPOS_idGRUPO',$GRUPOS_idGRUPO);
    }

 

} 