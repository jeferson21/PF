<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Projetos', 'action' => 'edit', 'id' => $projeto->idPROJETO));?>    
		
	<?=form::open($update_link) ?>
	 Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>
      
     Nome: <?php echo form::input('NOME_PROJ', $projeto->NOME_PROJ); 
      		 if(isset($errors['NOME_PROJ'])) echo $errors['NOME_PROJ']; 
      	   ?> <br><br>
      
      Data de Início: <?=form::input('DATA_INI[DIA]');?> / 
      <?=form::input('DATA_INI[MES]');?> / <?=form::input('DATA_INI[ANO]') ;?> <br><br>

      Data Fim: <?=form::input('DATA_FIM[DIA]');?> / <?=form::input('DATA_FIM[MES]');?> / 
      <?=form::input('DATA_FIM[ANO]');?> <br><br>

      Gerente: <?=form::input('GERENTE', $projeto->GERENTE);?> <br><br>

      Situação: <?=form::select('SITUACAO_PROJ', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
    	<?=form::submit('btn_submit', 'Salvar') ?>
	<?=form::close()?>
		    
		<br><br>
	</body>
</html>