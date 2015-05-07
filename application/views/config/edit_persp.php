<?php defined('SYSPATH') or die('No direct script access.'); ?>


<?=form::open('Perspectivas/salvar') ?> 
	  Tipo: <?=form::input('TIPO_PERSP', $perspectiva->TIPO_PERSP);?> <br><br>
      Descrição: <?=form::input('DESCRICAO_PERSP', $perspectiva->DESCRICAO_PERSP);?> <br><br>
      Situação: <?=form::select('SITUACAO_PERSP', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
 	  
 	  <?=form::hidden('idPERSPECTIVA', $perspectiva->idPERSPECTIVA)?>
      <?=form::submit('btn_submit', 'Salvar') ?>
<?=form::close()?>