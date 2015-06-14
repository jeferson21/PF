<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Indicadores extends Controller_Template { 

	public $template = 'templateWelcome';

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

      $this->template->content= View::Factory('templateXSD');
    }

    public function action_exportarXSD() {
      $this->template = "templateXML";  
        
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

                $indicadores = ORM::Factory('indicador')->find_all();                              

                foreach ($indicadores as $indicador) {
                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('name', 'INDICADORES_idINDICADOR');
                    $elementFilho->addAttribute('type', 'xs:int');
                    $elementFilho->addAttribute('value', $indicador->idINDICADOR);

                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('name', 'TIPO_IND');
                    $elementFilho->addAttribute('type', 'xs:string');
                    $elementFilho->addAttribute('value', $indicador->TIPO_IND);
                   
                }

                $projetos = ORM::Factory('projeto')->find_all();

                foreach ($projetos as $projeto) {                    

                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('name', 'PROJETOS_idPROJETO');
                    $elementFilho->addAttribute('type', 'xs:string');
                    $elementFilho->addAttribute('value', $projeto->idPROJETO);
                
                    $elementFilho = $sequence->addChild('xmlns:xs:element');
                    $elementFilho->addAttribute('name', 'NOME_PROJ');
                    $elementFilho->addAttribute('type', 'xs:string');
                    $elementFilho->addAttribute('value', $projeto->idPROJETO);
                }                    


                    

                 
                    
                    
              

            $dom = dom_import_simplexml($schemaXML)->ownerDocument;
            $dom->formatOutput = true;
            $dom = $dom->saveXML();           
            $this->template = View::Factory('templateXML')->set('XML', $dom);            
                      
    }


} //end controller