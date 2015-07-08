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
                                    ->set('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO)
                                    ->set('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR)
                                    ->bind('indicadores', $indicadores);
    }

    public function action_salvar() {
       $OBJETIVOS_idOBJETIVO = ORM::get_select('Objetivo');                   
       $INDICADORES_idINDICADOR = ORM::get_select('Indicador');                                                                        
       $indicadores=ORM::Factory('Indicador')->find_all();
       
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
                                    ->bind('indicadores', $indicadores)    
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
                    $elementFilho->addAttribute('type', 'xs:float');
                    $elementFilho->addAttribute('name', 'VALOR'); 
                
                $idOBJETIVO = $_POST['OBJETIVOS_idOBJETIVO'];

                $indicadores = ORM::Factory('indicador')
                               ->where('SITUACAO_IND', '=', '0')
                               ->and_where('OBJETIVOS_idOBJETIVO', '=', $idOBJETIVO)
                               ->find_all();
                
                $projetos = ORM::Factory('Projeto')
                               ->and_where('OBJETIVOS_idOBJETIVO', '=', $idOBJETIVO)
                               ->find_all();                                          

                foreach ($indicadores as $indicador) {
                  foreach ($projetos as $nomeproj) {  

                    $Obj = $sequence->addChild('xmlns:xs:element');
                    $Obj->addAttribute('name', 'OBJETIVO ESTRATEGICO');
                    $Obj->addAttribute('type', 'xs:int');
                    $Obj->addAttribute('value', $indicador->objetivo->DESCRICAO_OBJ);
                    
                    $NomeProj = $Obj->addChild('xmlns:xs:element');
                    $NomeProj->addAttribute('name', 'PROJETO');
                    $NomeProj->addAttribute('type', 'xs:string');
                    $NomeProj->addAttribute('value', $nomeproj->NOME_PROJ);
                    
                    $idProj = $Obj->addChild('xmlns:xs:element');
                    $idProj->addAttribute('name', 'idPROJETO');
                    $idProj->addAttribute('type', 'xs:int');
                    $idProj->addAttribute('value', $nomeproj->idPROJETO);

                    $Indicador = $Obj->addChild('xmlns:xs:element');
                    $Indicador->addAttribute('name', 'TIPO_IND');
                    $Indicador->addAttribute('type', 'xs:string');
                    $Indicador->addAttribute('value', $indicador->TIPO_IND); 

                    $idIndicador = $Obj->addChild('xmlns:xs:element');
                    $idIndicador->addAttribute('name', 'INDICADORES_idINDICADOR');
                    $idIndicador->addAttribute('type', 'xs:int');
                    $idIndicador->addAttribute('value', $indicador->idINDICADOR);
                  }
               }              
      } //End if
            
            
            $dom = dom_import_simplexml($schemaXML)->ownerDocument;
            $dom->formatOutput = true;
            $dom = $dom->saveXML();  
            $dom=str_replace('<?xml version="1.0"?>', '<?xml version="1.0" encoding="UTF-8"?>', $dom);
            $this->template = View::Factory('templateXML')->set('XML', $dom);            
        
    }

} //end controller