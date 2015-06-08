<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
		
    <?=form::open('Itens/salvar') ?>

      Ano do Mapa: <?=form::select('MAPAS_idME',$MAPAS_idME); ?><br><br> 	   
      Perspectivas: <br>
      <?php foreach ($PERSPECTIVAS_idPERSPECTIVA as $id => $desc) {
          echo form::checkbox('perspectivas[]', $id) . " " . $desc . "<br><br>";
      }
      ?>       
        	  
		  <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?> 


 		 <table>
                  <tr>
                      <td>   <b> Ano </b> </td>
                      <td>   <b> Visao </b> </td>
                      <td>   <b> Missao   </b> </td>
                      
                      
                      <td colspan="3"><b> Opções </b> </td>
                  </tr>
             
              <?php 
                   foreach($itens as $item) { ?>  
                  <tr>
                     <td> <?=$item->mapa->ANO   ?>  </td>
                     <td> <?=$item->mapa->VISAO ?> </td>
                     <td> <?=$item->mapa->MISSAO ?> </td>
                   

                     <td> 
                        <?php $delete_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Itens', 'action' => 'delete', 'id' => $item->idITEM));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Itens', 'action' => 'edit', 'id' => $item->idITEM));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td> 
                      <td> 
                          <?php $update_link = Route::get('default')
                          ->uri(array(
                            'controller' => 'Mapas', 'action' => 'exibir', 'id' => $item->idITEM));?>
                          <?= HTML::anchor($update_link, 'Exibir Mapa'); ?>
                      </td> 

                  </tr>         	   
              <?php } ?>
          </table>
  	</body>
</html>