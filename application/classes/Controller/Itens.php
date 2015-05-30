<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Itens extends Controller_Template { 

	public $template = 'templateWelcome';

	 
   public function action_index() {
    
      $PERSPECTIVAS_idPERSPECTIVA = ORM::Factory('Perspectiva')
                                    ->find_all()->as_array('idPERSPECTIVA' ,'DESCRICAO_PERSP');
      $ME_idME = ORM::Factory('Mapa')
                                    ->find_all()->as_array('idME' ,'ANO');      

      $this->template->content= View::Factory('templateItens')
                     ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA)
                     ->set('ME_idME',$ME_idME);
    }


  	public function action_salvar() {
        $PERSPECTIVAS_idPERSPECTIVA = ORM::Factory('Perspectiva')
                                    ->find_all()->as_array('idPERSPECTIVA' ,'DESCRICAO_PERSP');
        $ME_idME = ORM::Factory('Mapa')
                                    ->find_all()->as_array('idME' ,'ANO');         
        $errors= array();
        try {
            if(HTTP_Request::POST == $this->request->method()) {
                    $item = ORM::Factory('Item');
                  	$item -> values($_POST);
                    $item -> save();                  
                    $item->add('perspectivas', $_POST['perspectivas']);                  
                  	$item -> save();
                  	$this->redirect('Itens');
             }        
         } catch(ORM_Validation_Exception $e) {
             $errors = $e->errors('forms');
         }
          	$this->template->content= View::Factory('templateItens')
                 ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA)
                 ->set('ME_idME',$ME_idME);
      }

    public function action_delete() {
        $idGRUPO = $this->request->param('id');        
        $grupo = ORM::Factory('Grupo', $idGRUPO)->delete();  
        $this->redirect('Grupos');
    }

    public function action_edit() { 
       $PERSPECTIVAS_idPERSPECTIVA = ORM::Factory('Perspectiva')->find_all()->as_array('idPERSPECTIVA' ,'DESCRICAO_PERSP'); 
        $idGRUPO = $this->request->param('id');
        // verificando se o método é post
        if(HTTP_Request::POST == $this->request->method()){
            $_POST['idGRUPO'] = $idGRUPO;
            $projeto = ORM::Factory('Grupo', $idGRUPO);            
            $projeto -> values($_POST);
            $projeto -> save();            
        }         
        $grupo = ORM::Factory('Grupo',$idGRUPO);      
        $this->template->content= View::Factory('edit/editGrupos')
            ->set('grupo', $grupo)
            ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA);
    }



 
} 