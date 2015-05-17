<?php defined('SYSPATH') or die('No direct script access.'); ?>

	  <?=form::open('Users/login')?> 
	  	 
	  	 Usuário: <?=form::input('username');?><br><br>     
	  	 Senha: <?=form::password('password');?><br><br> 
	  	<?=form::submit('btn_submit', 'Salvar') ?>
	  <?=form::close()?>

