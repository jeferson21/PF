<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indicadores extends Controller_Template { 

	public $template = 'templateWelcome';

	public function action_index() {        
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');                   
       $INDICADORES_idINDICADOR = ORM::get_select('Indicador');                                    
       
      $indicadores=ORM::Factory('Indicador')->find_all();
      if(!isset($indicadores[0])) 
          $indicadores=array();               
       $this->template->content=View::Factory('templateIndicadores')
                                    ->bind('indicadores',$indicadores)
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR);
    }

    public function action_salvar() {
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');                   
       $INDICADORES_idINDICADOR = ORM::get_select('Indicador');                                                                        
       
       $errors=array();
        try {
            if(HTTP_Request::POST == $this->request->method()) {
              $indicador = ORM::Factory('Indicador');
            	$indicador -> values($_POST);
              $indicador -> save();
            	$this->redirect('Indicadores');
            }
        } catch(ORM_Validation_Exception $e) {
          $errors = $e->errors('forms');
        }

        $this->template->content= View::Factory('templateIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)                                    
                                    ->set('errors', $errors); 
    }

     public function action_delete() {
        $idINDICADOR = $this->request->param('id');        
        $indicador= ORM::Factory('Indicador',$idINDICADOR)->delete(); 
        $this->redirect('Indicadores');
    }

    public function action_edit() {  
        $idINDICADOR = $this->request->param('id'); 
        $indicador= ORM::Factory('Indicador',$idINDICADOR);      
        $indicadores=ORM::Factory('Indicador')->find_all();
        $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo'); 
        
        
        $errors=array();
        try {
            if(HTTP_Request::POST == $this->request->method()) { 
                $_POST['idINDICADOR'] = $idINDICADOR;
                $indicador = ORM::Factory('Indicador', $idINDICADOR);            
                $indicador -> values($_POST);
                $indicador -> save();
                $this->redirect('Indicadores');
            }
         } catch(ORM_Validation_Exception $e) {
          $errors = $e->errors('forms');
        }          
        
        $this->template->content= View::Factory('edit/editIndicadores')
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('indicador',$indicador)
                                    ->bind('indicadores', $indicadores)                                    
                                    ->set('errors', $errors); 
    }

    public function action_indexXSD() {
      $PROJETOS_idPROJETO = ORM::get_select('Projeto');
      $OBJETIVOS_idOBJETIVO= ORM::get_select('Objetivo');
      $this->template->content= View::Factory('templateXSD')
                                     ->set('PROJETOS_idPROJETO',$PROJETOS_idPROJETO)
                                     ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);
    }

    public function action_exportarXSD() {   
      $this->template = "templateXML";  

      if(HTTP_Request::POST == $this->request->method()) { 
        $schemaXML = new SimpleXMLElement('<xs:schema></xs:schema>', LIBXML_NOERROR, false,
                                         'xs', true);

        $schemaXML->addAttribute('attributeFormDefault', 'unqualified');
        $schemaXML->addAttribute('elementFormDefault', 'qualified');
        $schemaXML->addAttribute('xmlns:xs', 'http://www.w3.org/2001/XMLSchema');

          $element = $schemaXML->addChild('xmlns:xs:element');
            $element->addAttribute('name', 'Indicadores');

            $complexType = $element->addChild('xmlns:xs:complexType');

              $sequence = $complexType->addChild('xmlns:xs:sequence');
                
                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('type', 'xs:date');
                    $elementFilho->addAttribute('name', 'DATA');
                    
                     
                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('type', 'xs:string');
                    $elementFilho->addAttribute('name', 'UNIDADE');
                    
                    
                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('type', 'xs:float');
                    $elementFilho->addAttribute('name', 'VALOR'); 

                $projeto = $_POST['PROJETOS_idPROJETO']; #PEGANDO ID DO PROJ PASSADO NO FORM
                #PEGANDO NOME DO PROJETO ESCOLHIDO    
                $projetos = ORM::Factory('Projeto')
                               ->where('idPROJETO','=', $projeto)
                               ->find_all();

                foreach ($projetos as $nomeproj) {               
                    $elementFilhoProj = $sequence->addChild('xmlns:xs:element');
                    $elementFilhoProj->addAttribute('name', 'NOME_PROJ');
                    $elementFilhoProj->addAttribute('type', 'xs:string');
                    $elementFilhoProj->addAttribute('value', $nomeproj->NOME_PROJ);
                }
                #PEGANDO ID DO PROJETO ESCOLHIDO
                    $elementFilhoDoProj = $elementFilhoProj->addChild('xmlns:xs:element');
                    $elementFilhoDoProj->addAttribute('name', 'PROJETOS_idPROJETO');
                    $elementFilhoDoProj->addAttribute('type', 'xs:string');
                    $elementFilhoDoProj->addAttribute('value', $projeto);      

                $idOBJETIVO = $_POST['OBJETIVOS_idOBJETIVO'];

                $indicadores = ORM::Factory('indicador')
                               ->where('SITUACAO_IND', '=', '0')
                               ->and_where('OBJETIVOS_idOBJETIVO', '=', $idOBJETIVO)
                               ->find_all();                              
                    
                foreach ($indicadores as $indicador) {
                    
                    $elementFilhoObj = $sequence->addChild('xmlns:xs:element');
                    $elementFilhoObj->addAttribute('name', 'OBJETIVO ESTRAT.');
                    $elementFilhoObj->addAttribute('type', 'xs:int');
                    $elementFilhoObj->addAttribute('value', $indicador->objetivo->DESCRICAO_OBJ);

                    $filhoIndicador = $elementFilhoObj->addChild('xmlns:xs:element');
                    $filhoIndicador->addAttribute('name', 'TIPO_IND');
                    $filhoIndicador->addAttribute('type', 'xs:string');
                    $filhoIndicador->addAttribute('value', $indicador->TIPO_IND); 

                    $filhoDoIndicador = $filhoIndicador->addChild('xmlns:xs:element');
                    $filhoDoIndicador->addAttribute('name', 'INDICADORES_idINDICADOR');
                    $filhoDoIndicador->addAttribute('type', 'xs:int');
                    $filhoDoIndicador->addAttribute('value', $indicador->idINDICADOR);
    
                }                                     
              
      } //End if

            $dom = dom_import_simplexml($schemaXML)->ownerDocument;
            $dom->formatOutput = true;
            $dom = $dom->saveXML();           
            $this->template = View::Factory('templateXML')->set('XML', $dom);            
        
    }

    /*
    public function action_getIndicadores(){
        $this->auto_render = false;
        $objetivo = $this->request->POST('objetivo');
        $indicadores = ORM::Factory('Objetivo', $objetivo)->indicador->find_all(); 
        foreach ($indicadores as $key => $indicador) {
          echo form::checkbox('indicador[]', $indicador->idINDICADOR, false, 
            array('id' => 'checkIndicadores'.$indicador->idINDICADOR)) . " " . $indicador->TIPO_IND . "<br><br>";
            
            echo "<div class='indicador' id='indicadores{$indicador->idINDICADOR}'>"."</div>";
      }
    } 
    */

} //end controller