<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>

	  [ Importação XML ] <br><br>
			
	  <?=form::open('Importacoes/importarXML') ?>
				
		   Indicador: <?=form::select('INDICADORES_idINDICADOR',$INDICADORES_idINDICADOR); ?> <br><br>
		   Mapa: <?=form::select('ITENS_idITEM',$ITENS_idITEM); ?> <br><br>
		   Arquivo XML: <?=form::file('arquivoXML');?> <br>
			    
		 <?=form::submit('btn_submit', 'Salvar') ?>
	  <?=form::close()?>     


	  <table>
                  <tr>
                      <td><b>    Mapa </b>  </td> 
                      <td><b>    Indicador  </b>   </td>
                      <td><b>    Unidade    </b> </td>
                      <td><b>    Data    </b> </td>
                      <td><b>    Valor    </b> </td>
                      <!-- <td colspan="2"><b> Opções</b></td> -->
                  </tr>
             
              <?php 
                 foreach($importacoes as $impotacao) { ?>  
                  <tr>
                     <td> <?=$impotacao->ITENS_idITEM ?> </td>
                     <td> <?=$impotacao->indicador->DESCRICAO_IND ?>  </td>
                     <td> <?=$impotacao->UNIDADE ?>    </td>
                     <td> <?=$impotacao->DATA ?>  </td>
                     <td> <?=$impotacao->VALOR ?> </td>
                    
                   <?php /*  <td> 
                        <?php $delete_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Importacoes', 'action' => 'delete', 'id' => $impotacao->idIMPORTACAO));?>
                          <?= HTML::anchor($delete_link, 'Delete'); ?>
                      <td> 
                          <?php $update_link = Route::get('default')
                        ->uri(array(
                          'controller' => 'Importacoes', 'action' => 'edit', 'id' => $impotacao->idIMPORTACAO));?>
                          <?= HTML::anchor($update_link, 'Edit'); ?>
                      </td>   
                  </tr>    
                  */?>     	   
              <?php } ?>
          </table>

	</body>
</html>