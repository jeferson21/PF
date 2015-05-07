<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Objetivos', 'action' => 'edit', 'id' => $objetivo->idOBJETIVO));?>    
		
		<?=form::open($update_link) ?>
		  Grupo: <?php echo form::select('GRUPOS_idGRUPO', $GRUPOS_idGRUPO); ?> <br><br>	
		  Descrição: <?=form::input('DESCRICAO_OBJ', $objetivo->DESCRICAO_OBJ);?> <br><br>
	      Situação: <?=form::select('SITUACAO_OBJ', array('0'=>'Ativo','1'=>'Inativo'), $objetivo->SITUACAO_OBJ);?><br><br>     
	      <?=form::submit('btn_submit', 'Salvar') ?>
	   <?=form::close()?>
	 

		<br><br>
	</body>
</html>