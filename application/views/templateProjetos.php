<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
      <legend>Projetos</legend>
    	<?=form::open('Projetos/salvar') ?>
    	    Objetivo Estratégico: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO); ?> <br><br>  
          Nome do Projeto: <?=form::input('NOME_PROJ'); if(isset($errors['NOME_PROJ'])) echo $errors['NOME_PROJ']; ?> <br><br>
          
          Data de Início: <?=form::input('DATA_INI[DIA]');?>  /
                          <?=form::input('DATA_INI[MES]');?> /
                          <?=form::input('DATA_INI[ANO]');
                              if(isset($errors['DATA_INI'])) echo $errors['DATA_INI']; 
                          ?>  <br><br>
         
          Data Fim: <?=form::input('DATA_FIM[DIA]');?>  /
                    <?=form::input('DATA_FIM[MES]');?> / 
                    <?=form::input('DATA_FIM[ANO]');
                        if(isset($errors['DATA_FIM'])) echo $errors['DATA_FIM'];
                    ?> <br><br>

          Responsável: <?=form::input('RESPONSAVEL'); if(isset($errors['RESPONSAVEL'])) echo $errors['RESPONSAVEL']; ?> <br><br>
          Situação: <?=form::select('SITUACAO_PROJ', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
        	<?=form::submit('btn_submit', 'Salvar') ?>
    	<?=form::close()?><br>

    <table class="table table-bordered table-responsive table-hover">
                  <tr>
                      <td><b>    Nome     </b></td>
                      <td><b>    Data_ini </b></td>
                      <td><b>    Data_fim </b></td>
                      <td><b>    Responsável  </b></td>
                      <td><b>    Objetivo </b></td>
                      <td><b>    Situação </b></td>
                      <td colspan="2"><b> Opções </b></td>
                  </tr>
             
              <?php 
                 foreach($projetos as $projeto) { ?>  
                  <tr>
                     <td> <?=$projeto->NOME_PROJ?>  </td>
                     <td> <?=$projeto->DATA_INI?> </td>
                     <td> <?=$projeto->DATA_FIM?>  </td>
                     <td> <?=$projeto->RESPONSAVEL?> </td>
                     <td> <?=$projeto->objetivo->DESCRICAO_OBJ?>  </td> 
                     <td> <?php 
                            if($projeto->SITUACAO_PROJ==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Projetos', 'action' => 'delete', 'id' => $projeto->idPROJETO));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                          ->uri(array(
                          'controller' => 'Projetos', 'action' => 'edit', 'id' => $projeto->idPROJETO));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>              
              <?php } ?>
          </table>
    </body>
</html>