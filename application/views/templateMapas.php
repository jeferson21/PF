<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
		<?=form::open('Mapas/salvar') ?>

			  Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
			  Missão: <?=form::input('MISSAO'); 
			     			if(isset($errors['MISSAO'])) echo $errors['MISSAO'];?><br><br>
			  Visão: <?=form::input('VISAO');
			  				if(isset($errors['VISAO'])) echo $errors['VISAO'];?> <br><br>
		    Ano: <?=form::input('ANO');
		     				if(isset($errors['ANO'])) echo $errors['ANO'];?> <br><br>
		    Situação: <?=form::select('SITUACAO_ME', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>

		    <?=form::submit('btn_submit', 'Salvar') ?>
		<?=form::close()?> 


 		 <table>
                  <tr>
                      <td>   <b> Missão </b> </td>
                      <td>   <b> Visão  </b> </td>
                      <td>   <b> Ano    </b> </td>
                      <td>    Situação     </td>
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
	                          'controller' => 'Mapas', 'action' => 'delete', 'id' => $mapa->idME));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
	                        ->uri(array(
	                          'controller' => 'Mapas', 'action' => 'edit', 'id' => $mapa->idME));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } ?>
          </table>
  	</body>
</html>