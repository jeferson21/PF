<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
  <head>
        <title> SG Mapa Estratégico </title>
  </head>

    <?php echo html::style("media/css/bootstrap.css");?>
    <?php echo html::script("media/js/jquery.min.js");?>
    <?php echo html::script("media/js/bootstrap.min.js");?>
    <?php echo html::script("media/js/ajax.js");?>
       
  <body>

    <div class="navbar-header">
        <a href="#" class="navbar-brand"> SG Mapa Estratégico |</a>                
    </div>
       
       <ul class="nav nav-tabs">
          <li> <?=html::anchor('Perspectivas/index','Perspectivas')?></li>
          <li><?=html::anchor('Grupos/index','Grupos')?></li>
          <li><?=html::anchor('Objetivos/index','Objetivos Estratégicos')?></li>
          <li><?=html::anchor('Projetos/index','Projetos')?> </li>
           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Indicadores<b class="caret"></b></a>
                <ul class="dropdown-menu">
                          <li><?=html::anchor('Indicadores/index','Gerenciar Indicador')?></li>
                          <li><?=html::anchor('Indicadores/indexXSD','Gerar XSD')?></li>
                          <li><?=html::anchor('Importacoes/index','Importar XML')?></li>
                </ul>
          </li>
          <li><?=html::anchor('Metas/index','Metas')?></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mapa<b class="caret"></b></a>
                <ul class="dropdown-menu">
                          <li><?=html::anchor('Mapas/index','Gerenciar Mapa')?></li>
                          <li><?=html::anchor('Itens/index','Montar Mapa')?></li>
                          <li><?=html::anchor('Mapas/exibirMapas','Exibir Mapas')?></li>
                </ul>
          </li>                    
        </ul>        
          
           <div class="container"> 
                    <div class="container-fluid">
                      <br><br>  <?=$content?> <br><br>
                    </div>
          </div>

  </body>
</html>
