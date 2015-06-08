<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
  <body>
      <?=form::open('Metas/salvar') ?>  	  
        	    
            Indicador: <?php echo form::select('INDICADORES_idINDICADOR',$INDICADORES_idINDICADOR); ?> <br><br>  
              
            Descrição: <?=form::input('DESCRICAO_MET'); 
                          if(isset($errors['DESCRICAO_MET'])) echo $errors['DESCRICAO_MET'];
                        ?> <br><br>
            Ano: <?=form::input('ANO');
                      if(isset($errors['ANO'])) echo $errors['ANO'];
                   ?><br><br>
            Unidade: <?=form::select('UNIDADE', array('0'=>'%','1'=>'Num', '2'=>'R$'));?><br><br>

            Vermelho: [ De <?=form::input('VERMELHO_INI');   
                                if(isset($errors['VERMELHO_INI'])) echo $errors['VERMELHO_INI'];?> 
                         até <?=form::input('VERMELHO_LIM'); 
                                if(isset($errors['VERMELHO_LIM'])) echo $errors['VERMELHO_LIM'];?>] <br><br>

            Amarelo: [ De <?=form::input('AMARELO_INI'); 
                              if(isset($errors['AMARELO_INI'])) echo $errors['AMARELO_INI'];?> 
                         até <?=form::input('AMARELO_LIM'); 
                                 if(isset($errors['AMARELO_LIM'])) echo $errors['AMARELO_INI'];?> ] <br><br>

            Verde:  [ Maior ou igual a: <?=form::input('VERDE'); 
                              if(isset($errors['VERDE'])) echo $errors['VERDE'];?> ]<br><br>

            Situação: <?=form::select('SITUACAO_MET', array('0'=>'Ativo','1'=>'Inativo'));?><br><br>
          <?=form::submit('btn_submit', 'Salvar') ?>
       <?=form::close()?>

        <table>
                  <tr>
                      <td><b>    Indicador     </b></td>
                      <td><b>    Descrição da Meta        </b></td>
                      <td><b>    Ano        </b></td>
                      <td><b>    Unidade    </b></td>
                      <td><b>    Vermelho   </b></td>
                      <td><b>    Amarelo    </b></td>
                      <td><b>    Verde      </b></td>
                      <td><b>    Situação     </b></td>
                      <td colspan="2"><b> Opções </b></td>
                  </tr>
             
              <?php 
                 foreach($metas as $meta) { ?>  
                  <tr>
                     <td> <?=$meta->indicador->DESCRICAO_IND?>  </td>
                     <td> <?=$meta->DESCRICAO_MET?> </td>
                     <td> <?=$meta->ANO?> </td>
                     <td> <?php 
                                if($meta->UNIDADE==0) { echo "%"; } 
                                else if($meta->UNIDADE==1){ echo "Num"; }
                                else { echo "R$"; }
                           ?>
                     </td>
                     <td> <?= $meta->VERMELHO_INI."-".$meta->VERMELHO_LIM ?> </td>          
                     <td> <?= $meta->AMARELO_INI."-".$meta->AMARELO_LIM ?> </td>
                     <td> <?= $meta->VERDE ?> </td>
                     <td> <?php 
                            if($meta->SITUACAO_MET==0) { echo "Ativo"; } 
                            else { echo "Inativo";  }
                          ?> 
                     </td>
                     <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Metas', 'action' => 'delete', 'id' => $meta->idMETA));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Metas', 'action' => 'edit', 'id' => $meta->idMETA));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>              
              <?php } ?>
          </table>
    </body>
</html>
  