<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Grupos', 'action' => 'edit', 'id' => $grupo->idGRUPO));?>    
		
		<?=form::open($update_link) ?>
		  Perspectiva: <?php echo form::select('PERSPECTIVAS_idPERSPECTIVA',$PERSPECTIVAS_idPERSPECTIVA); ?> <br><br>	
		  Categoria: <?=form::input('CATEGORIA', $grupo->CATEGORIA);?> <br><br>
	      Situação: <?=form::select('SITUACAO_GR', array('0'=>'Ativo','1'=>'Inativo'), $grupo->SITUACAO_GR);?><br><br>     
	      <?=form::submit('btn_submit', 'Salvar') ?>
	   <?=form::close()?>

		<br><br>
	</body>
</html>