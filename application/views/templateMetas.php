<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
  <body>
    <legend>Metas</legend>
      
      <?=form::open('Metas/salvar') ?>  	   
            Indicador: <?php echo form::select('INDICADORES_idINDICADOR',$INDICADORES_idINDICADOR); ?> <br><br>  
              
            Descrição: <?=form::input('DESCRICAO_MET'); 
                          if(isset($errors['DESCRICAO_MET'])) echo $errors['DESCRICAO_MET'];
                        ?> <br><br>
            Ano: <?=form::input('ANO');
                      if(isset($errors['ANO'])) echo $errors['ANO'];
                   ?><br><br>
            Unidade: <?=form::select('UNIDADE', array('0'=>'%','1'=>'Num', '2'=>'R$'));?><br><br>

            Verde:  De <?=form::input('VERDE_INI'); 
                              if(isset($errors['VERDE_INI'])) echo $errors['VERDE_INI'];?>
                              até <?=form::input('VERDE_LIM', NULL, array('id' => 'ver_lim')); 
                                 if(isset($errors['VERDE_LIM'])) echo $errors['VERDE_LIM'];?>  <br><br>

            Amarelo: De <?=form::input('AMARELO_INI', NULL, array('disabled'=>"disabled", 'id' => 'ama_ini')); 
                              if(isset($errors['AMARELO_INI'])) echo $errors['AMARELO_INI'];?> 
                         até <?=form::input('AMARELO_LIM', NULL, array('id' => 'ama_lim')); 
                                 if(isset($errors['AMARELO_LIM'])) echo $errors['AMARELO_LIM'];?> <br><br>

            Vermelho: De <?=form::input('VERMELHO_INI', NULL, array('disabled'=>"disabled", 'id' => 'ver_ini'));?> 
                         até <?=form::input('VERMELHO_LIM'); 
                                if(isset($errors['VERMELHO_LIM'])) echo $errors['VERMELHO_LIM'];?><br><br>
            

            Situação: <?=form::select('SITUACAO_MET', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
          <?=form::submit('btn_submit', 'Salvar') ?>
       <?=form::close()?>

       <table class="table table-bordered table-responsive table-hover">
       
                  <tr>
                      <td><b>    Indicador     </b></td>
                      <td><b>    Obj. Estratégico     </b></td>
                      <td><b>    Descrição da Meta </b></td>
                      <td><b>    Ano        </b></td>
                      <td><b>    Unidade    </b></td>
                      <td><b>    Verde   </b></td>
                      <td><b>    Amarelo    </b></td>
                      <td><b>    Vermelho      </b></td>
                      <td><b>    Situação     </b></td>
                      <td colspan="2"><b> Opções </b></td>
                  </tr>
             
              <?php 
                 foreach($metas as $meta) { ?>  
                  <tr>
                     <td> <?=$meta->indicador->TIPO_IND?>  </td>
                     <td> <?=$meta->indicador->objetivo->DESCRICAO_OBJ?>  </td>
                     <td> <?=$meta->DESCRICAO_MET?> </td>
                     <td> <?=$meta->ANO?> </td>
                     <td> <?php 
                                if($meta->UNIDADE==0) { echo "%"; } 
                                else if($meta->UNIDADE==1){ echo "Num"; }
                                else { echo "R$"; }
                           ?>
                     </td>
                     <td> <?= $meta->VERDE_INI."-".$meta->VERDE_LIM ?> </td>
                     <td> <?php 
                            if(is_numeric($meta->VERDE_LIM)) {
                                     $AMARELO_INI=$meta->VERDE_LIM;
                                     $AMARELO_INI+=1;
                                     echo $AMARELO_INI."-".$meta->AMARELO_LIM; 
                            } 
                          ?> 
                     </td>
                     <td> <?php 
                            if(is_numeric($meta->AMARELO_LIM)) {
                                     $VERMELHO_INI=$meta->AMARELO_LIM;
                                     $VERMELHO_INI+=1;
                                     echo $VERMELHO_INI."-".$meta->VERMELHO_LIM; 
                            }
                          ?> 
                     </td> 
                     <td> <?php 
                            if($meta->SITUACAO_MET==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Metas', 'action' => 'delete', 'id' => $meta->idMETA));
                          echo HTML::image('media/img/delete.png', array('alt' => '')); ?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Metas', 'action' => 'edit', 'id' => $meta->idMETA));
                          echo HTML::image('media/img/edit.png', array('alt' => '')); ?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>              
              <?php } ?>
          </table>
    </body>
</html>
  