<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Itens extends Controller_Template { 

	public $template = 'templateWelcome';

   public function action_index() {
    
      $PERSPECTIVAS_idPERSPECTIVA = ORM::Factory('Perspectiva')
                                    ->find_all()->as_array('idPERSPECTIVA' ,'DESCRICAO_PERSP');
      
      $MAPAS_idME = ORM::Factory('Mapa')->find_all()->as_array('idME' ,'ANO');  

      $itens=ORM::Factory('Item')->find_all();
      if(!isset($itens[0])) 
          $itens=array();          
       $this->template->content= View::Factory('templateItens')
                                ->bind('itens', $itens)
                                ->set('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA)
                                ->set('MAPAS_idME',$MAPAS_idME);                 
    }

  	public function action_salvar() {
        $MAPAS_idME = ORM::get_select('Mapa');      
                                    
        $errors= array();
        try {
            if(HTTP_Request::POST == $this->request->method()) {
                $idME = $_POST['MAPAS_idME'];

                $delete = DB::delete('itens')
                          ->where('MAPAS_idME', '=', $idME)
                          ->execute(); #deletando os itens redundantes no mapa.

                foreach ($_POST['objetivo'] as $objetivo) {
                                   
                  $item = ORM::Factory('Item');

                  $query = DB::select(array('o.idOBJETIVO', 'OBJETIVOS_idOBJETIVO'),
                                           "o.GRUPOS_idGRUPO","g.PERSPECTIVAS_idPERSPECTIVA")
                  ->from(array('objetivos', 'o'))  
                  ->join(array('grupos','g'))->on('g.idGRUPO', '=', 'o.GRUPOS_idGRUPO')
                  ->join(array('perspectivas','p'))->on('p.idPERSPECTIVA', '=', 'g.PERSPECTIVAS_idPERSPECTIVA')
                  ->where('o.idOBJETIVO', '=', $objetivo)->as_object()->execute();


                  foreach ($query as $consulta) {
                         $consulta = (array)$consulta;
                         #echo Debug::vars($consulta);
                       $consulta['MAPAS_idME'] = $idME;    
                       $item -> values($consulta);
                  }             
                      
                  $item -> save();                  
                    
                 } 
                 $this->redirect('Itens');
             }        
         } catch(ORM_Validation_Exception $e) {
             $errors = $e->errors('forms');
         }
          	$this->template->content= View::Factory('templateItens')                 
                                        ->set('MAPAS_idME',$MAPAS_idME);
      }

   
 
} 