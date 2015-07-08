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
                      <td><b> Obj. Estratégico </b></td>
                      <td><b> Média Valores  </b></td>
                  </tr>
             
              <?php 
                 foreach($importacoes as $impotacao) { ?>  
                  <tr>
                     <td> <?=$impotacao->indicador->TIPO_IND?></td>
                     <td> <?=$impotacao->projeto->NOME_PROJ?></td>
                     <td> <?=$impotacao->projeto->objetivo->DESCRICAO_OBJ?></td>
                     <td> <?=$impotacao->VALOR?> </td>
                  </tr> 
              <?php } ?>
          </table>

	</body>
</html>