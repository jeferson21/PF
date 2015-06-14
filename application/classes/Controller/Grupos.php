<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Grupos extends Controller_Template { 

	public $template = 'templateWelcome';

	 
  public function action_getGrupos(){
    $this->auto_render = false;
    $perspectiva = $this->request->POST('perspectiva');
    $grupos = ORM::Factory('Perspectiva', $perspectiva)->grupo->find_all(); 

    foreach ($grupos as $key => $grupo) {
      echo form::checkbox('grupo[]', $grupo->idGRUPO, false, 
        array('id' => 'checkGrupos'.$grupo->idGRUPO)) . " " . $grupo->CATEGORIA . "<br><br>";

        echo "<div class='grupo' id='grupos{$grupo->idGRUPO}'>"."</div>";
    }
  }

   public function action_index() {
        $PERSPECTIVAS_idPERSPECTIVA = ORM::get_select('Perspectiva');
        $grupos=ORM::Factory('Grupo')->find_all(); //Find encontra um elemento, find_all(); vários. 
        
        if(!isset($grupos[0])) 
          $grupos=array();               
          $this->template->content= View::Factory('templateGrupos')
                                        ->bind('grupos', $grupos)
                                        ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA);
    }


  	public function action_salvar() {
        $PERSPECTIVAS_idPERSPECTIVA = ORM::get_select('Perspectiva'); #get_ selct substitui ORM::Factory('Model')->find_all()->as_array('X','Y');
        $grupos=ORM::Factory('Grupo')->find_all();
        
        $errors= array();
        try {
            if(HTTP_Request::POST == $this->request->method()) {
                    $grupo = ORM::Factory('Grupo');
                  	$grupo -> values($_POST);
                  	$grupo -> save();
                  	$this->redirect('Grupos');
             }        
         } catch(ORM_Validation_Exception $e) {
             $errors = $e->errors('forms');
         }
          	$this->template->content= View::Factory('templateGrupos')
                 ->set('PERSPECTIVAS_idPERSPECTIVA', $PERSPECTIVAS_idPERSPECTIVA)
                 ->bind('grupos', $grupos)
                 ->set('errors', $errors);
      }

    public function action_delete() {
        $idGRUPO = $this->request->param('id');        
        $grupo = ORM::Factory('Grupo', $idGRUPO)->delete();  
        $this->redirect('Grupos');
    }

    public function action_edit() { 
        $PERSPECTIVAS_idPERSPECTIVA = ORM::get_select('Perspectiva');
        $idGRUPO = $this->request->param('id');
        $grupo = ORM::Factory('Grupo',$idGRUPO);
        $grupos=ORM::Factory('Grupo')->find_all();
        
        
        if(HTTP_Request::POST == $this->request->method()){
            $_POST['idGRUPO'] = $idGRUPO;
            $grupo = ORM::Factory('Grupo', $idGRUPO);            
            $grupo -> values($_POST);
            $grupo -> save();            
            $this->redirect('Grupos');
        }         
        
        $this->template->content= View::Factory('edit/editGrupos')
            ->bind('grupos', $grupos)
            ->set('grupo', $grupo)
            ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA);
    }



 
} 