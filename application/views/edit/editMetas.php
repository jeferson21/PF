<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
	<body>
		<?php $update_link = Route::get('default')
		          ->uri(array(
		            'controller' => 'Metas', 'action' => 'edit', 'id' => $meta->idMETA));?>    
		
	   <?=form::open($update_link) ?>  
	   	   Indicador: <?=form::select('INDICADORES_idINDICADOR', $INDICADORES_idINDICADOR);?><br><br> 
           Descrição: <?=form::input('DESCRICAO_MET', $meta->DESCRICAO_MET);?> <br><br>
           Ano: <?=form::input('ANO', $meta->ANO);?><br><br>
 		       Unidade: <?=form::select('UNIDADE', array('0'=>'%','1'=>'Num', '2'=>'R$'), 
 		   					 $meta->UNIDADE);?><br><br>
           Vermelho: [ De <?=form::input('VERMELHO_INI', $meta->VERMELHO_INI);?> 
          			  até <?=form::input('VERMELHO_LIM', $meta->VERMELHO_LIM);?> ] <br><br>
           Amarelo: [ De <?=form::input('AMARELO_INI', $meta->AMARELO_INI);?> 
           			  até <?=form::input('AMARELO_LIM', $meta->AMARELO_LIM);?> ] <br><br>
           Verde:  [ Maior ou igual a: <?=form::input('VERDE', $meta->VERDE);?> ]<br><br>
           Situação: <?=form::select('SITUACAO_MET', array('0'=>'Ativo','1'=>'Inativo'), 
                             $meta->SITUACAO_MET);?><br><br>
            <?=form::submit('btn_submit', 'Salvar') ?>
        <?=form::close()?>
		<br><br>

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