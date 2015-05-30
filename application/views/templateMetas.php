<?php defined('SYSPATH') or die('No direct script access.'); ?>

<?=form::open('Metas/index') ?>
	  
	  Indicador: <?=form::select('INDICADORES_idINDICADORES',$INDICADORES_idINDICADORES); ?> <br><br>  
      Descrição: <?=form::input('DESCRICAO_METAS');?> <br><br>
      Ano: <?=form::input('ANO');?><br><br>
      Unidade: <?=form::select('UNIDADE', array('Percent'=>'%','Num'=>'Num', 'Real'=>'R$'));?><br><br>
      Vermelho: [ De <?=form::input('VERMELHO_INI');?> até <?=form::input('VERMELHO_LIM');?> ] <br><br>
      Amarelo: [ De <?=form::input('AMARELO_INI');?> até <?=form::input('AMARELO_LIM');?> ] <br><br>
      Verde:  [ Maior ou igual a: <?=form::input('VERDE');?> ]<br><br>
      Situação: <?=form::select('SITUACAO_IND', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>

    <?=form::submit('btn_submit', 'Salvar') ?>
<?=form::close()?>