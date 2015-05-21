<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?=form::open('Indicadores/salvar') ?>

	  Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
	  
	  Descrição: <?=form::input('DESCRICAO_IND');
	  				if(isset($errors['DESCRICAO_IND'])) echo $errors['DESCRICAO_IND']; 
	  			 ?> <br><br>     
      
      XML Schema: <?=form::file('CONFIG_IND');
      					if(isset($errors['CONFIG_IND'])) echo $errors['CONFIG_IND']; 
      			  ?> <br>
      
      Situação: <?=form::select('SITUACAO_IND', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>

    <?=form::submit('btn_submit', 'Salvar') ?>
<?=form::close()?> 
