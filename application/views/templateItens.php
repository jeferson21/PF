<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
		<?=form::open('Itens/salvar') ?>

      Ano do Mapa: <?=form::select('ME_idME',$ME_idME); ?><br><br> 	   

      Perspectiva: <?php echo form::select('PERSPECTIVAS_idPERSPECTIVA', $PERSPECTIVAS_idPERSPECTIVA);?><br><br> 

      Grupo: <?=form::select('GRUPOS_idGRUPO',$GRUPOS_idGRUPO); ?><br><br>
       
      Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO', $OBJETIVOS_idOBJETIVO);?><br><br>

      Indicador:<?=form::select('INDICADORES_idINDICADORES', $INDICADORES_idINDICADORES);?><br><br>
        	  
		    <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?> 


 		 <table>
                  <tr>
                      <td>   <b> Ano </b> </td>
                      <td>   <b> Perspectiva </b> </td>
                      <td>   <b> Grupo    </b> </td>
                      <td>   <b> Objetivo Estratégico  </b> </td>
                      <td>   <b> Indicador  </b></td>
                      <td>   <b>Situação </b>   </td>
                      <td colspan="2"><b> Opções </b> </td>
                  </tr>
             <!--
              <?php 
                 /*  foreach($mapas as $mapa) { ?>  
                  <tr>
                     <td> <?=$mapa->MISSAO?>  </td>
                     <td> <?=$mapa->VISAO?> </td>
                     <td> <?=$mapa->ANO?> </td>
                     <td> <?php 
                            if($mapa->SITUACAO_ME==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Mapas', 'action' => 'delete', 'id' => $mapa->idME));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Mapas', 'action' => 'edit', 'id' => $mapa->idME));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } */?> -->
          </table>
  	</body>
</html>