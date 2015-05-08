<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
	
      <?=form::open('Grupos/salvar') ?>
  		  Perspectiva: <?php echo form::select('PERSPECTIVAS_idPERSPECTIVA', $PERSPECTIVAS_idPERSPECTIVA); ?> <br><br>	
  		  Categoria: <?=form::input('CATEGORIA');
                       if(isset($errors['CATEGORIA'])) echo $errors['CATEGORIA'];?> <br><br>
  	    Situação: <?=form::select('SITUACAO_GR', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>     
	      <?=form::submit('btn_submit', 'Salvar') ?>
	   <?=form::close()?>

            <table>
                  <tr>
                      <td>    Categoria     </td>
                    <td>    Id Perspectiva   </td> <!-- Aqui eu quero mostrar o código da perspectiva
                                                     no lugar do código   -->
                      <td>    Situação     </td>
                      <td colspan="2"> Opções </td>
                  </tr>
             
              <?php 
                 foreach($grupos as $grupo) { ?>  
                  <tr>
                     <td> <?=$grupo->CATEGORIA?>  </td>
                     <td> <?=$grupo->PERSPECTIVAS_idPERSPECTIVA;?> </td>
                     <td> <?php 
                            if($grupo->SITUACAO_GR==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Grupos', 'action' => 'delete', 'id' => $grupo->idGRUPO));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Grupos', 'action' => 'edit', 'id' => $grupo->idGRUPO));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } ?>
          </table>
  	</body>
</html>