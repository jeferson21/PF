<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
    <legend>Detalhes do objetivo: <?= $objetivo->DESCRICAO_OBJ; ?></legend>
      <table class="table table-hover table-responsive table-bordered">
          <tr>
            <td><b>Projeto</b></td>
            <td><b>Responsável</b></td>
            <td><b>Indicador</b></td>
            <td><b>Estado</b></td>
            <td><b>Média dos Valores</b></td>
            <td><b>Meta</b></td>
            <td><b>Verde</b></td>
            <td><b>Amarelo</b></td>
            <td><b>Vermelho</b></td>
          <tr>
          <?php $staticObj = ORM::Factory('objetivo');
            foreach ($indicadores as $indicador) {        
              echo '<tr>';          
                echo "<td>", $indicador->NOME_PROJ, "</td>";
                echo "<td>", $indicador->RESPONSAVEL, "</td>";
                echo "<td>", $indicador->TIPO_IND, "</td>";
                echo "<td>", HTML::image($staticObj::get_indicador_color_image($indicador)), "</td>";
                echo "<td>", $indicador->VALOR, "</td>";
                 echo "<td>", $indicador->DESCRICAO_MET, "</td>";
                echo "<td>", $indicador->VERDE_INI."-".$indicador->VERDE_LIM, "</td>";
  
                  if(is_numeric($indicador->VERDE_LIM)) {
                    $AMARELO_INI=$indicador->VERDE_LIM;
                    $AMARELO_INI+=1; 
                  } 
                
                echo "<td>", $AMARELO_INI."-".$indicador->AMARELO_LIM,"</td>";

                   if(is_numeric($indicador->AMARELO_LIM)) {
                        $VERMELHO_INI=$indicador->AMARELO_LIM;
                        $VERMELHO_INI+=1;
                   }
                    
                echo "<td>", $VERMELHO_INI."-".$indicador->VERMELHO_LIM, "</td>";
              echo '</tr>';
            }
          ?>
      </table>
        <?php
               $link = Route::get('default')
                      ->uri(array('controller' => 'Mapas', 'action' => 'exibirMapas'));
        ?> 
        <?=HTML::anchor($link, 'Voltar para Exibição de Mapas');?>
  	</body>
</html>