<?php defined('SYSPATH') or die('No direct script access.');?>

<html>
	<body>
      <legend> Exportar XSD </legend>


         <?php $exportarXSD = Route::get('default')->uri(array(
                				'controller' => 'Indicadores','action' => 'exportarXSD'));
         ?>
         <?= HTML::anchor($exportarXSD, 'Exportar XSD');?>
                   

	</body>
</html>	
