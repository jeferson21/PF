<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indicadores extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {
       
       $OBJETIVOS_idOBJETIVO = ORM::Factory('Objetivo')->find_all()->as_array('idOBJETIVO' ,'DESCRICAO_OBJ');

        if(isset($_POST['SITUACAO_IND'])) {
                $indicador = ORM::Factory('Indicador');
            	$indicador -> values($_POST);
            	$indicador -> save();
            	$this->redirect('Indicadores');
            }        
    $this->template->content= View::Factory('templateIndicadores')->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO); 
    }

} 