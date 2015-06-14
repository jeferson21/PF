<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
    <legend>Editar Grupos</legend> 
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Grupos', 'action' => 'edit', 'id' => $grupo->idGRUPO));?>    
		
		<?=form::open($update_link) ?>
		  Perspectiva: <?php echo form::select('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA); ?> <br><br>	
		  Categoria: <?=form::input('CATEGORIA', $grupo->CATEGORIA);?> <br><br>
	      Situação: <?=form::select('SITUACAO_GR', array('0'=>'Ativo','1'=>'Inativo'), $grupo->SITUACAO_GR);?><br><br>     
	      <?=form::submit('btn_submit', 'Salvar') ?>
	   <?=form::close()?><br>

	   <table class="table table-bordered table-responsive table-hover">
                  <tr>
                      <td><b>    Categoria  </b>   </td>
                      <td><b>    Perspectiva </b>  </td> 
                      <td><b>    Situação    </b> </td>
                      <td colspan="2"><b> Opções</b></td>
                  </tr>
             
              <?php 
                 foreach($grupos as $grupo) { ?>  
                  <tr>
                     <td> <?=$grupo->CATEGORIA?>  </td>
                     <td> <?=$grupo->perspectiva->DESCRICAO_PERSP?> </td>
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

          <?php
	          	$link = Route::get('default')
	          				  ->uri(array('controller' => 'Grupos', 'action' => 'index'));
	           ?> 
		       <?=HTML::anchor($link, 'Voltar para Grupos');?>
	</body>
</html>