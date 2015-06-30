<?php defined('SYSPATH') or die('No direct script access.');?>

	
	<?php 
        #fazer donwload do arquivo XSD
		header ("Content-Type: application/octet-stream");
		header ("Content-disposition: attachment; filename=Indicadores.xsd");
		echo $XML;

		#mostrando o codigo do arquivo no navegador
		#echo '<pre>', htmlentities($XML) ,'</pre>';
	?>	


	