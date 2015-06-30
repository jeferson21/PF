<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
		<legend>Editar Mapas</legend>
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Mapas', 'action' => 'edit', 'id' => $mapa->idME));?>    

		<?=form::open($update_link) ?>
			  Missão: <br>
			   <?=form::textarea('MISSAO', $mapa->MISSAO); 
			     			if(isset($errors['MISSAO'])) echo $errors['MISSAO'];
			  		  ?><br><br>
			  Visão:  <br>
			  		 <?=form::textarea('VISAO', $mapa->VISAO);
			  				if(isset($errors['VISAO'])) echo $errors['VISAO'];
			  		  ?> <br><br>
		      Ano: <?=form::input('ANO', $mapa->ANO);
		      				if(isset($errors['ANO'])) echo $errors['ANO'];
		      	   ?> <br><br>
		      Situação: <?=form::select('SITUACAO_ME', array('0'=>'Ativo','1'=>'Inativo'), $mapa->SITUACAO_ME);?><br><br>

		    <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?><br>

		<table class="table table-bordered table-responsive table-hover">
                  <tr>
                      <td>   <b> Missão </b> </td>
                      <td>   <b> Visão  </b> </td>
                      <td>   <b> Ano    </b> </td>
                      <td>   <b> Situação <b>    </td>
                      <td colspan="2"><b> Opções </b> </td>
                  </tr>
             
              <?php 
                 foreach($mapas as $mapa) { ?>  
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
	                          'controller' => 'Mapas', 'action' => 'delete', 'id' => $mapa->idME));
                           echo HTML::image('media/img/delete.png', array('alt' => '')); ?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Mapas', 'action' => 'edit', 'id' => $mapa->idME));
                          echo HTML::image('media/img/edit.png', array('alt' => '')); ?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } ?>
          </table>

          <?php
	          	 $link = Route::get('default')
	          				  ->uri(array('controller' => 'Mapas', 'action' => 'index'));
	           ?> 
		       <?=HTML::anchor($link, 'Voltar para Mapas');?>
	</body>
</html>