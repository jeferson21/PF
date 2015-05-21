<?php defined('SYSPATH') or die('No direct script access.'); ?>
<html>
  <head>
        <title> SG Mapa Estratégico </title>
  </head>

    <?php echo html::style("media/css/bootstrap.css"); ?>
    <?php echo html::script("media/js/jquery.min.js"); ?>
    <?php echo html::script("media/js/bootstrap.min.js"); ?>
          
	<body>
		<div class="container-top">
       		 Sistema Gerenciador de Mapas Estratégicos |  
	       		<div class="container-form">
	       		 	   <?=form::open('Users/login')?> 
					  	 Usuário: <?=form::input('username');
					  	 			if(isset($errors['username'])) echo $errors['username'];
					  	 		  ?>   
					  	 Senha: <?=form::password('password');?>
					  	 <?=form::submit('btn_submit', 'Entrar') ?>
					  <?=form::close()?>
			 	</div>    
		</div>
	</body>

 </html>