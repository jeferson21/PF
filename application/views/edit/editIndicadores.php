<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>
    <legend>Editar Indicadores</legend>

		<?php $update_link = Route::get('default')
             ->uri(array(
               'controller' => 'Indicadores', 'action' => 'edit', 'id' => $indicador->idINDICADOR));?> 
			<?=form::open($update_link) ?>
		  		 
			Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO,
                              $indicador->OBJETIVOS_idOBJETIVO); ?> <br><br>  
			Descrição: <?=form::input('TIPO_IND', $indicador->TIPO_IND);
				  				if(isset($errors['TIPO_IND'])) echo $errors['TIPO_IND']; 
				  			 ?> <br><br>     
			Situação: <?=form::select('SITUACAO_IND', array('0'=>'Ativo','1'=>'Inativo'), $indicador->SITUACAO_IND);?><br><br>

			    <?=form::submit('btn_submit', 'Salvar') ?>
			<?=form::close()?> 

			<br>
			<table class="table table-bordered table-responsive table-hover">
                  <tr>
                      <td><b>    Indicador </b>  </td> 
                      <td><b>    Objetivo Estratégico  </b>   </td>
                      <td><b>    Situação    </b> </td>
                      <td colspan="2"><b> Opções</b></td>
                  </tr>
             
              <?php 
                 foreach($indicadores as $indicador) { ?>  
                  <tr>
                     <td> <?=$indicador->TIPO_IND;?> </td>
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

            <?php
               $link = Route::get('default')
                      ->uri(array('controller' => 'Indicadores', 'action' => 'index'));
            ?> 
            <?=HTML::anchor($link, 'Voltar para Indicadores');?>
	</body>
</html>