<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
    <legend>Editar Objetivos Estratégicos</legend> 
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Objetivos', 'action' => 'edit', 'id' => $objetivo->idOBJETIVO));?>    
		
		<?=form::open($update_link) ?>
		  Grupo: <?php echo form::select('GRUPOS_idGRUPO', $GRUPOS_idGRUPO); ?> <br><br>	
		  Descrição: <?=form::input('DESCRICAO_OBJ', $objetivo->DESCRICAO_OBJ);?> <br><br>
	      Situação: <?=form::select('SITUACAO_OBJ', array('0'=>'Ativo','1'=>'Inativo'), $objetivo->SITUACAO_OBJ);?><br><br>     
	      <?=form::submit('btn_submit', 'Salvar') ?>
	   <?=form::close()?><br>

	   <table class="table table-bordered table-responsive table-hover">
                  <tr>
                      <td><b>    Decrição </b></td>
                      <td> <b>   Grupo   </b></td>
                      <td> <b>   Situação  </b> </td>
                      <td colspan="2"><b> Opções </b></td>
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
			
			     <?php
               $link = Route::get('default')
                      ->uri(array('controller' => 'Objetivos', 'action' => 'index'));
            ?> 
            <?=HTML::anchor($link, 'Voltar para Objetivos');?>

	</body>
</html>