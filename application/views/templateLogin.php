<?php defined('SYSPATH') or die('No direct script access.'); ?>

<html>
  <head>
        <title> SG Mapa Estratégico </title>
  </head>

    <?php echo html::style("media/css/bootstrap.css"); ?>
    <?php echo html::script("media/js/jquery.min.js"); ?>
    <?php echo html::script("media/js/bootstrap.min.js"); ?>
       
   
	<body>
			  
			  <?=form::open('Users/login')?> 
			  	 Usuário: <?=form::input('username');?><br><br>     
			  	 Senha: <?=form::password('password');?><br><br> 
			  	<?=form::submit('btn_submit', 'Salvar') ?>
			  <?=form::close()?>

	</body>

 </html>