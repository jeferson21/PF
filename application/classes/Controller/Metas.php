<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Metas extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {
        $INDICADORES_idINDICADORES = ORM::Factory('Indicador')->find_all()->as_array('idINDICADORES' ,'DESCRICAO_IND');

        if(isset($_POST['SITUACAO_MET'])) {
                $meta = ORM::Factory('Meta');
            	$meta -> values($_POST);
            	$meta -> save();
            	$this->redirect('Metas');
            }        
    $this->template->content= View::Factory('templateMetas')->set('INDICADORES_idINDICADORES', $INDICADORES_idINDICADORES); 
    }

} 