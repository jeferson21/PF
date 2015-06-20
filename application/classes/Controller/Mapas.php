<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mapas extends Controller_Template { 

    public $template = 'templateWelcome';

    public function action_index() {
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');
       $mapas=ORM::Factory('Mapa')->find_all();
       
       if(!isset($mapas[0])) 
          $mapas=array(); 
            $this->template->content= View::Factory('templateMapas')
                                        ->bind('mapas', $mapas)
                                        ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);
    }

    public function action_exibirMapas() {
        $MAPAS_idME = ORM::get_select('Mapa');

        $this->template->content= View::Factory('templateTabelaMapa')
                                      ->set('MAPAS_idME', $MAPAS_idME);   
    }

    public function action_exibir() {
        $this->template->content= View::Factory('templateMapa');
        return $this->template->content->tabela = $this->action_get_map();
    }
    
    public function action_get_map(){
        $this->auto_render = false;
        if(HTTP_Request::POST == $this->request->method())
            $idMap = $this->request->POST('mapa');
        else
            $idMap = 1;
        $mapa = ORM::Factory('Mapa', $idMap);

        $mapArray = $mapa->get_map();
        $countObjetivos = $mapa->countObjetivos;        
        echo $this->template->content= View::Factory('templateMapaCompleto')
            ->set('mapa', $mapArray)->set('countObjetivos', $countObjetivos)
            ->set('mapaObject', $mapa);            
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
        $mapa = ORM::Factory('Mapa', $idME); 
        $mapas=ORM::Factory('Mapa')->find_all();
        // verificando se o método é post
        if(HTTP_Request::POST == $this->request->method()) { 
            $_POST['idME'] =  $idME;
            $mapa = ORM::Factory('Mapa',  $idME);            
            $mapa -> values($_POST);
            $mapa -> save();
        }         
             
        $this->template->content= View::Factory('edit/editMapas')
                                        ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                        ->set('mapa', $mapa)
                                        ->bind('mapas', $mapas);
    }

} 