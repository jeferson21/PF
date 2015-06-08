<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
  <head>
        <title> SG Mapa Estratégico </title>
  </head>

    <?php echo html::style("media/css/bootstrap.css"); ?>
    <?php echo html::script("media/js/jquery.min.js"); ?>
    <?php echo html::script("media/js/bootstrap.min.js"); ?>
       
   
  <body>
        <!--  <nav role="navigation" class="navbar navbar-default"> -->
    <div class="navbar-header">
        <a href="#" class="navbar-brand"> SG Mapa Estratégico |</a>                
    </div>
       
       <ul class="nav nav-tabs">
          <li> <?=html::anchor('Perspectivas/index','Perspectivas')?></li>
          <li><?=html::anchor('Grupos/index','Grupos')?></li>
          <li><?=html::anchor('Objetivos/index','Objetivos Estratégicos')?></li>
          <li><?=html::anchor('Projetos/index','Projetos')?> </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mapa<b class="caret"></b></a>
                <ul class="dropdown-menu">
                          <li><?=html::anchor('Mapas/index','Criar Mapa')?></li>
                          <li><?=html::anchor('Itens/index','Montar Mapa')?></li>
                          <li><?=html::anchor('Mapas/exibir','Exibir Mapas')?></li>
                </ul>
          </li>
           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Indicadores<b class="caret"></b></a>
                <ul class="dropdown-menu">
                          <li><?=html::anchor('Indicadores/index','Cadastrar Indicador')?></li>
                          <li><?=html::anchor('Importacoes/index','Importar XML')?></li>
                </ul>
          </li>
          <li><?=html::anchor('Metas/index','Metas')?></li>                    
        </ul>
                  
               <div class="logout">
                   <?php 
                      $logout = Route::get('logout')->uri(
                          array(
                             'controller' => 'Users',
                             'action' => 'logout')
                          );
                    ?>
                      <?=HTML::anchor($logout, 'Logout'); ?>
                </div>
      
           <div class="container"> 
              <div class="row">
                  <div class="container-fluid">
                      <br><br>  <?=$content?> <br><br>
                  </div>
              </div>
          </div>
  
  </body>
</html>
