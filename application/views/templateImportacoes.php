<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>
	  <legend>Importação XML</legend>
			
	  <?=form::open('Importacoes/importarXML') ?>
		   Arquivo XML: <?=form::file('arquivoXML');?> <br>
		 <?=form::submit('btn_submit', 'Importar Arquivo') ?>
	  <?=form::close()?>     


	  <table class="table table-bordered table-responsive table-hover">
                  <tr>
                      <td><b> Indicador </b></td>
                      <td><b> Projeto </b></td>
                      <td><b> Unidade   </b></td>
                      <td><b> Data      </b></td>
                      <td><b> Valor     </b></td>
                  </tr>
             
              <?php 
                 foreach($importacoes as $impotacao) { ?>  
                  <tr>
                     <td> <?=$impotacao->indicador->TIPO_IND ?>  </td>
                     <td> <?=$impotacao->projeto->NOME_PROJ ?>    </td>
                     <td> <?=$impotacao->UNIDADE ?>    </td>
                     <td> <?=$impotacao->DATA ?>  </td>
                     <td> <?=$impotacao->VALOR ?> </td>
                   
              <?php } ?>
          </table>

	</body>
</html>