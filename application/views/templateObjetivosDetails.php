<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
   <body>
    <legend>Detalhes do objetivo: <?= $objetivo->DESCRICAO_OBJ; ?></legend>
    <table class="table table-hover table-responsive table-bordered">
    <tr>
      <td><b>Indicador</b></td>
      <td><b>Situação</b></td>
      <td><b>Valor</b></td>
      <td><b>Início Amarelo</b></td>
      <td><b>Início Vermelho</b></td>
    <tr>
    <?php $staticObj = ORM::Factory('objetivo');
      foreach ($indicadores as $indicador) {        
        echo '<tr>';          
          echo "<td>", $indicador->TIPO_IND, '</td>';
          echo "<td>", HTML::image($staticObj::get_indicador_color_image($indicador)), "</td>";
          echo "<td>", $indicador->VALOR, "</td>";
          echo "<td>", $indicador->VERDE_LIM, "</td>";
          echo "<td>", $indicador->AMARELO_LIM, "</td>";
        echo '</tr>';
      }
    ?>


    </table>


  	</body>
</html>