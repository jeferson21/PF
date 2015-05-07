<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Mapas', 'action' => 'edit', 'id' => $mapa->idME));?>    

		<?=form::open($update_link) ?>

			  Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
			  Missão: <?=form::input('MISSAO', $mapa->MISSAO); 
			     			if(isset($errors['MISSAO'])) echo $errors['MISSAO'];
			  		  ?><br><br>
			  Visão: <?=form::input('VISAO', $mapa->VISAO);
			  				if(isset($errors['VISAO'])) echo $errors['VISAO'];
			  		  ?> <br><br>
		      Ano: <?=form::input('ANO', $mapa->ANO);
		      				if(isset($errors['ANO'])) echo $errors['ANO'];
		      	   ?> <br><br>
		      Situação: <?=form::select('SITUACAO_ME', array('0'=>'Ativo','1'=>'Inativo'), $mapa->SITUACAO_ME);?><br><br>

		    <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?> 

		<br><br>
	</body>
</html>