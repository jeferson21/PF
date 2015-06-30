<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
       
       <legend>Perspectivas</legend>

          <?=form::open('Perspectivas/salvar')?> 
          	    Tipo: <?=form::select('TIPO_PERSP', array('0' => 'Custo' , '1' => 'Prazo', '2' => 'Satisfação'));?> <br><br>
                Descrição: <?=form::input('DESCRICAO_PERSP'); 
                              if(isset($errors['DESCRICAO_PERSP'])) echo $errors['DESCRICAO_PERSP'];
                           ?> <br><br>
                Situação: <?=form::select('SITUACAO_PERSP', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
               <?=form::submit('btn_submit', 'Salvar') ?>
          <?=form::close()?> <br>

        

            <table class="table table-bordered table-responsive table-hover">
              <thead>
                  <tr style="color=black">
                      <td><b>    Tipo     </b></td>
                      <td><b>    Descrição   </b></td>
                      <td><b>    Situação     </b></td>
                      <td colspan="2"><b> Opções </b></td>
                    
                  </tr>
              </thead>   
             
              <?php 
                 foreach($perspectivas as $perspectiva) { ?>  
                  <tr>
                     <td><?php
                            if($perspectiva->TIPO_PERSP==0) { echo "Custo"; } 
                            else if($perspectiva->TIPO_PERSP==1) { echo "Prazo"; }
                            else { echo "Satisfação"; }
                          ?> 
                     </td>
                     <td> <?=$perspectiva->DESCRICAO_PERSP?> </td>
                     <td> <?php 
                            if($perspectiva->SITUACAO_PERSP==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Perspectivas', 'action' => 'delete', 'id' => $perspectiva->idPERSPECTIVA));
                           echo HTML::image('media/img/delete.png', array('alt' => '')); ?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 

                          <?php $update_link = Route::get('default')
                               ->uri(array(
                               'controller' => 'Perspectivas', 'action' => 'edit', 'id' => $perspectiva->idPERSPECTIVA));
                            echo HTML::image('media/img/edit.png', array('alt' => '')); ?>
                            <?=HTML::anchor($update_link,'Edit');?>
                      </td>   
                    </tr>         	   
              <?php } ?>
          </table> 
          

  	</body>
</html>