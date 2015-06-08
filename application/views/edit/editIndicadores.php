<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>

		<?php $update_link = Route::get('default')
             ->uri(array(
               'controller' => 'Indicadores', 'action' => 'edit', 'id' => $indicador->idINDICADOR));?> 
			<?=form::open($update_link) ?>
		  		 
			Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
			Descrição: <?=form::input('DESCRICAO_IND', $indicador->DESCRICAO_IND);
				  				if(isset($errors['DESCRICAO_IND'])) echo $errors['DESCRICAO_IND']; 
				  			 ?> <br><br>     
			Situação: <?=form::select('SITUACAO_IND', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>

			    <?=form::submit('btn_submit', 'Salvar') ?>
			<?=form::close()?> 

			<br>
			<table>
                  <tr>
                      <td><b>    Indicador </b>  </td> 
                      <td><b>    Objetivo Estratégico  </b>   </td>
                      <td><b>    Situação    </b> </td>
                      <td colspan="2"><b> Opções</b></td>
                  </tr>
             
              <?php 
                 foreach($indicadores as $indicador) { ?>  
                  <tr>
                     <td> <?=$indicador->DESCRICAO_IND;?> </td>
                     <td> <?=$indicador->objetivo->DESCRICAO_OBJ?>  </td>
                     <td> <?php 
                            if($indicador->SITUACAO_IND==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Indicadores', 'action' => 'delete', 'id' => $indicador->idINDICADOR));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Indicadores', 'action' => 'edit', 'id' => $indicador->idINDICADOR));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } ?>
          </table>
	</body>
</html>