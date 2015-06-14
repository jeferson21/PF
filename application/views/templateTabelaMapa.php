<?php defined('SYSPATH') or die('No direct script access.'); ?> 	
 
     		 Mapas:
     		 <?php
     		 	 $MAPAS_idME = array(-1 => "Selecione um mapa") + $MAPAS_idME;
     		 	 echo form::select('MAPAS_idME',$MAPAS_idME, NULL, array('id' => 'selectMap'));

     		 ?><br><br>
     		 <div id="fullMap"></div>
      		
	   

	
	
	



	
