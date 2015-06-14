<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>

<body>
	<legend>Editar Perspectivas</legend>

	<?php $update_link = Route::get('default')
	          ->uri(array(
	            'controller' => 'Perspectivas', 'action' => 'edit', 'id' => $perspectiva->idPERSPECTIVA));?>

	<?=form::open($update_link) ?>
		  Tipo: <?=form::select('TIPO_PERSP', array('0' => 'Custo' , '1' => 'Prazo', 
		  						'2' => 'Satisfação'), $perspectiva->TIPO_PERSP);?> <br><br>
	      Descrição: <?=form::input('DESCRICAO_PERSP', $perspectiva->DESCRICAO_PERSP);?> <br><br>
	      Situação: <?=form::select('SITUACAO_PERSP', array('0'=>'Ativo','1'=>'Inativo'), 
	      							 $perspectiva->SITUACAO_PERSP);?><br><br>
	      <?=form::submit('btn_submit', 'Salvar') ?>
	<?=form::close()?><br>

		 <table class="table table-bordered table-responsive table-hover">
	              <thead>
	                  <tr>
	                      <td><b>    Tipo     </b></td>
	                      <td><b>    Descrição   </b></td>
	                      <td><b>    Situação     </b></td>
	                      <td colspan="2"><b> Opções </b></td>
	                    
	                  </tr>
	              </thead>   
	             
	              <?php 
	                 foreach($perspectivas as $perspectiva) { ?>  
	                  <tr>
	                     <td><?php
	                            if($perspectiva->TIPO_PERSP==0) { echo "Custo"; } 
	                            else if($perspectiva->TIPO_PERSP==1) { echo "Prazo"; }
	                            else { echo "Satisfação"; }
	                          ?> 
	                     </td>
	                     <td> <?=$perspectiva->DESCRICAO_PERSP?> </td>
	                     <td> <?php 
	                            if($perspectiva->SITUACAO_PERSP==0) { echo "Ativo"; } 
	                            else { echo "Inativo";  }
	                          ?> 
	                     </td>
	                     <td> 
	                        <?php $delete_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Perspectivas', 'action' => 'delete', 'id' => $perspectiva->idPERSPECTIVA));?>
	                          <?= HTML::anchor($delete_link, 'Delete'); ?>
	                      <td> 
	                          <?php $update_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Perspectivas', 'action' => 'edit', 'id' => $perspectiva->idPERSPECTIVA));?>
	                          <?= HTML::anchor($update_link, 'Edit'); ?>
	                      </td>   
	                  </tr>         	   
	              <?php } ?>
	          </table> 
	         
               
	          <?php
	          	 $link = Route::get('default')
	          				  ->uri(array('controller' => 'Perspectivas', 'action' => 'index'));
	           ?> 
		       <?=HTML::anchor($link, 'Voltar para Perspectivas');?>
	</body>
</html>