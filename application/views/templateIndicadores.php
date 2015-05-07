<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?=form::open('Indicadores/index') ?>

	  Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
	  Descrição: <?=form::input('DESCRICAO_IND');?> <br><br>
      XML Schema: <?=form::file('CONFIG_IND');?> <br>
      Situação: <?=form::select('SITUACAO_IND', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>

    <?=form::submit('btn_submit', 'Salvar') ?>
<?=form::close()?> 
