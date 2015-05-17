<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
		<?=form::open('Objetivos/salvar') ?>
			  Grupo: <?php echo form::select('GRUPOS_idGRUPO',$GRUPOS_idGRUPO); ?> <br><br>	
		      Descrição: <?=form::input('DESCRICAO_OBJ');
                        if(isset($errors['DESCRICAO_OBJ'])) echo $errors['DESCRICAO_OBJ'];?> <br><br>
		      Situação: <?=form::select('SITUACAO_OBJ', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
		    <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?>

		  <table>
                  <tr>
                      <td>    Decrição     </td>
                      <td>    Grupo   </td>
                      <td>    Situação     </td>
                      <td colspan="2"> Opções </td>
                  </tr>
             
              <?php 
                 foreach($objetivos as $objetivo) { ?>  
                  <tr>
                     <td> <?=$objetivo->DESCRICAO_OBJ?>  </td>
                     <td> <?=$objetivo->grupo->CATEGORIA?> </td>
                      <td> <?php 
                            if($objetivo->SITUACAO_OBJ==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Objetivos', 'action' => 'delete', 'id' => $objetivo->idOBJETIVO));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Objetivos', 'action' => 'edit', 'id' => $objetivo->idOBJETIVO));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } ?>
          </table>
  	</body>
</html>