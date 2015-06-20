<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>
      <legend> Gerar XSD </legend>


         <?=form::open('Indicadores/exportarXSD')?>  		 
				
		   A qual Projeto o Indicador estará associado? 
		   <?=form::select('PROJETOS_idPROJETO',$PROJETOS_idPROJETO);?><br><br>  
				
			    <?=form::submit('btn_submit', 'Gerar Arquivo XSD')?>
		<?=form::close()?><br>

         
                   

	</body>
</html>	
