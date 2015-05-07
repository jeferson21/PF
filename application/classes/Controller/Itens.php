<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Itens extends Controller_Template { 

	public $template = 'templateWelcome';

	 
   public function action_index() {
      $PERSPECTIVAS_idPERSPECTIVA = ORM::Factory('Perspectiva')
                                    ->find_all()->as_array('idPERSPECTIVA' ,'DESCRICAO_PERSP');
      $ME_idME = ORM::Factory('Mapa')
                                    ->find_all()->as_array('idME' ,'ANO');
      $GRUPOS_idGRUPO = ORM::Factory('Grupo')
                                    ->find_all()->as_array('idGRUPO' ,'CATEGORIA');
      $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')
                                    ->find_all()->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');                               
      $INDICADORES_idINDICADORES = ORM::Factory('Indicador')->find_all()->as_array('idINDICADORES','DESCRICAO_IND');

      $this->template->content= View::Factory('templateItens')
                     ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA)
                     ->set('ME_idME',$ME_idME) 
                     ->set('GRUPOS_idGRUPO',$GRUPOS_idGRUPO)
                     ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                     ->set('INDICADORES_idINDICADORES', $INDICADORES_idINDICADORES);
    }


  	public function action_salvar() {
       $PERSPECTIVAS_idPERSPECTIVA = ORM::Factory('Perspectiva')
                                    ->find_all()->as_array('idPERSPECTIVA' ,'DESCRICAO_PERSP');
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
                 ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA)
                 ->bind('grupos', $grupos)
                 ->set('errors', $errors);
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