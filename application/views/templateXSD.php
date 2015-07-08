<?php defined('SYSPATH') or die('No direct script access.');?>
<html>
	<body>
      <legend> Gerar XSD </legend>

         <?=form::open('Indicadores/exportarXSD')?>  		 
		   Selecione O Objetivo Estratégico que o Indicador estará associado: <br><br>		
		   
		   Objetivo: <?=form::select('OBJETIVOS_idOBJETIVO',$OBJETIVOS_idOBJETIVO);?><br><br>  
				
			    <?=form::submit('btn_submit', 'Gerar Arquivo XSD')?>
		<?=form::close()?>           

	</body>
</html>	
