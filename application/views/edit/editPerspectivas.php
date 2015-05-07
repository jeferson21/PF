<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>

<body>
<?php $update_link = Route::get('default')
          ->uri(array(
            'controller' => 'Perspectivas', 'action' => 'edit', 'id' => $perspectiva->idPERSPECTIVA));?>

<?=form::open($update_link) ?>

	    Tipo <?=form::select('TIPO_PERSP', array('Custo' => 'Custo' , 'Prazo' => 'Prazo', 'Satisfação' => 'Satisfação'),
                 $perspectiva->TIPO_PERSP );?> <br><br>
      Descrição: <?=form::input('DESCRICAO_PERSP', $perspectiva->DESCRICAO_PERSP);?> <br><br>
      Situação: <?=form::select('SITUACAO_PERSP', array('0'=>'Ativo','1'=>'Inativo'),
       $perspectiva->SITUACAO_PERSP);?><br><br>
 
      <?=form::submit('btn_submit', 'Salvar') ?>
<?=form::close()?>

<br> <br>


	</body>
</html>