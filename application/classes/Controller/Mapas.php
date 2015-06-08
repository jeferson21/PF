<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mapas extends Controller_Template { 

    public $template = 'templateWelcome';

    public function action_index() {
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')
                               ->find_all()->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');
        $mapas=ORM::Factory('Mapa')->find_all();
        if(!isset($mapas[0])) 
          $mapas=array();
        
            $this->template->content= View::Factory('templateMapas')
            ->bind('mapas', $mapas)
            ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);
    }

    public function action_exibir() {
        $this->template->content= View::Factory('templateMapa');
        return $this->template->content->tabela = $this->action_get_map();
    }

    public function action_get_map(){
        $mapa = ORM::Factory('Mapa')->find();
        $item = $mapa->itens;
        $perspectivas = $item->perspectivas;            
        $perspectivas = ORM::Factory('Perspectiva')->find_all()->as_array();

        return $this->template->content= View::Factory('templateTabelaMapa')
            ->set('perspectivas', $perspectivas);            
    }

    public function action_salvar() {
        $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');
        $mapas = ORM::Factory('Mapa')->find_all();                         
        
        $errors = array();
        try {
            if(HTTP_Request::POST == $this->request->method()){ #verificando se o método é POST
                $mapa = ORM::Factory('Mapa');
                $mapa -> values($_POST);
                $mapa -> save();
                $this->redirect('Mapas');
            }
        } catch(ORM_Validation_Exception $e) {
            $errors = $e->errors('forms');
        }
         $this->template->content= View::Factory('templateMapas')
            ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
            ->set('mapas', $mapas)
            ->set('errors', $errors);
    }   

    public function action_delete() {
        $idME = $this->request->param('id');        
        $mapa= ORM::Factory('Mapa', $idME)->delete(); 
        $this->redirect('Mapas');
    }

    public function action_edit() {  
        $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');
        $idME = $this->request->param('id');
        // verificando se o método é post
        if(HTTP_Request::POST == $this->request->method()) { 
            $_POST['idME'] =  $idME;
            $mapa = ORM::Factory('Mapa',  $idME);            
            $mapa -> values($_POST);
            $mapa -> save();            
        }         
        $mapa = ORM::Factory('Mapa', $idME);      
        $this->template->content= View::Factory('edit/editMapas')
            ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
            ->set('mapa', $mapa);
    }

} 