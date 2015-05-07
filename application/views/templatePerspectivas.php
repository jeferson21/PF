<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>

      <?=form::open('Perspectivas/salvar') ?> 
      	  Tipo <?=form::select('TIPO_PERSP', array('Custo' => 'Custo' , 'Prazo' => 'Prazo', 'Satisfação' => 'Satisfação'));?> <br><br>
            Descrição: <?=form::input('DESCRICAO_PERSP'); 
                          if(isset($errors['DESCRICAO_PERSP'])) echo $errors['DESCRICAO_PERSP'];
                       ?> <br><br>
            Situação: <?=form::select('SITUACAO_PERSP', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
           <?=form::submit('btn_submit', 'Salvar') ?>
      <?=form::close()?> <br> <br>

            <table>
                  <tr>
                      <td>    Tipo     </td>
                      <td>    Descrição     </td>
                      <td>    Situação     </td>
                      <td colspan="2"> Opções </td>
                  </tr>
             
              <?php 
                 foreach($perspectivas as $perspectiva) { ?>  
                  <tr>
                     <td> <?=$perspectiva->TIPO_PERSP?>  </td>
                     <td> <?=$perspectiva->DESCRICAO_PERSP?> </td>
                     <td> <?php 
                            if($perspectiva->SITUACAO_PERSP==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Perspectivas', 'action' => 'delete', 'id' => $perspectiva->idPERSPECTIVA));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Perspectivas', 'action' => 'edit', 'id' => $perspectiva->idPERSPECTIVA));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>         	   
              <?php } ?>
          </table>
  	</body>
</html>